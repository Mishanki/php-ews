<?php
/**
 * This examples gets the free/busy status for a user; it can be altered to
 * include the status for multiple users by adding additional mailboxes.
 */
require_once '../../vendor/autoload.php';

use \mishanki\PhpEws\Client;
use \mishanki\PhpEws\Request\GetUserAvailabilityRequestType;

use \mishanki\PhpEws\ArrayType\ArrayOfMailboxData;

use \mishanki\PhpEws\Enumeration\FreeBusyViewType;
use \mishanki\PhpEws\Enumeration\ResponseClassType;

use \mishanki\PhpEws\Type\Duration;
use \mishanki\PhpEws\Type\EmailAddressType;
use \mishanki\PhpEws\Type\FreeBusyViewOptionsType;
use \mishanki\PhpEws\Type\MailboxData;

// Replace with the email of the user and date range you wish to get the
// availability for.
$email = '';
$start = new DateTime('this week 00:00:00');
$end = new DateTime('this week + 6 days 23:59:59');

// Replace with the timezone you would like the user's availability displayed
// in.
$timezone = 'Eastern Standard Time';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);
$client->setTimezone($timezone);

// Build the request.
$request = new GetUserAvailabilityRequestType();
$request->FreeBusyViewOptions = new FreeBusyViewOptionsType();
$request->MailboxDataArray = new ArrayOfMailboxData();

// Define the time window and details to return.
$request->FreeBusyViewOptions->TimeWindow = new Duration();
$request->FreeBusyViewOptions->TimeWindow->StartTime = $start->format('c');
$request->FreeBusyViewOptions->TimeWindow->EndTime = $end->format('c');
$request->FreeBusyViewOptions->MergedFreeBusyIntervalInMinutes = 30;
$request->FreeBusyViewOptions->RequestedView = FreeBusyViewType::DETAILED;

// Add the user to get availability for.
$mailbox = new MailboxData();
$mailbox->Email = new EmailAddressType();
$mailbox->Email->Address = $username;
$mailbox->Email->RoutingType = 'SMTP';
$mailbox->AttendeeType = 'Required';
$mailbox->ExcludeConflicts = false;
$request->MailboxDataArray->MailboxData[] = $mailbox;

$response = $client->GetUserAvailability($request);

// Iterate over the user availability returned, printing any error messages or
// the working periods for each. On response will be included for each mailbox
// in the request.
foreach ($response->FreeBusyResponseArray->FreeBusyResponse as $availability) {
    // Make sure the request succeeded.
    $response_message = $availability->ResponseMessage;
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(
            STDERR,
            "Failed to get user availability with \"$code: $message\"\n"
        );
        continue;
    }

    // Iterate over the working periods for the user, printing the details of
    // each.
    $periods = $availability->FreeBusyView->WorkingHours->WorkingPeriodArray;
    foreach ($periods->WorkingPeriod as $period) {
        $start_minutes = $period->StartTimeInMinutes;
        $end_minutes = $period->EndTimeInMinutes;

        $start_time = new DateTime("today $start_minutes minutes");
        $end_time = new DateTime("today $end_minutes minutes");

        $output = $period->DayOfWeek . ' ' . $start_time->format('H:i') . ' - '
            . $end_time->format('H:i') . "\n";
        fwrite(STDOUT, $output);
    }
}
