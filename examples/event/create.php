<?php
require_once '../../vendor/autoload.php';

use \mishanki\PhpEws\Client;
use \mishanki\PhpEws\Request\CreateItemType;

use \mishanki\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType;
use \mishanki\PhpEws\ArrayType\NonEmptyArrayOfAttendeesType;

use \mishanki\PhpEws\Enumeration\BodyTypeType;
use \mishanki\PhpEws\Enumeration\CalendarItemCreateOrDeleteOperationType;
use \mishanki\PhpEws\Enumeration\ResponseClassType;
use \mishanki\PhpEws\Enumeration\RoutingType;

use \mishanki\PhpEws\Type\AttendeeType;
use \mishanki\PhpEws\Type\BodyType;
use \mishanki\PhpEws\Type\CalendarItemType;
use \mishanki\PhpEws\Type\EmailAddressType;

// Replace this with your desired start/end times and guests.
$start = new DateTime('tomorrow 4:00pm');
$end = new DateTime('tomorrow 5:00pm');
$guests = array(
    array(
        'name' => 'Homer Simpson',
        'email' => 'hsimpson@example.com',
    ),
    array(
        'name' => 'Marge Simpson',
        'email' => 'msimpson@example.com',
    ),
);

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request,
$request = new CreateItemType();
$request->SendMeetingInvitations = CalendarItemCreateOrDeleteOperationType::SEND_ONLY_TO_ALL;
$request->Items = new NonEmptyArrayOfAllItemsType();

// Build the event to be added.
$event = new CalendarItemType();
$event->RequiredAttendees = new NonEmptyArrayOfAttendeesType();
$event->Start = $start->format('c');
$event->End = $end->format('c');
$event->Subject = 'EWS Test Event';

// Set the event body.
$event->Body = new BodyType();
$event->Body->_ = 'This is the event body';
$event->Body->BodyType = BodyTypeType::TEXT;

// Iterate over the guests, adding each as an attendee to the request.
foreach ($guests as $guest) {
    $attendee = new AttendeeType();
    $attendee->Mailbox = new EmailAddressType();
    $attendee->Mailbox->EmailAddress = $guest['email'];
    $attendee->Mailbox->Name = $guest['name'];
    $attendee->Mailbox->RoutingType = RoutingType::SMTP;
    $event->RequiredAttendees->Attendee[] = $attendee;
}

// Add the event to the request. You could add multiple events to create more
// than one in a single request.
$request->Items->CalendarItem[] = $event;

$response = $client->CreateItem($request);

// Iterate over the results, printing any error messages or event ids.
$response_messages = $response->ResponseMessages->CreateItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Event failed to create with \"$code: $message\"\n");
        continue;
    }

    // Iterate over the created events, printing the id for each.
    foreach ($response_message->Items->CalendarItem as $item) {
        $id = $item->ItemId->Id;
        fwrite(STDOUT, "Created event $id\n");
    }
}
