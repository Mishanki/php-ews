<?php
/**
 * This examples get suggested meeting times for a single user. You could modify
 * this example to get suggested meetings times that multiple users will be
 * available for by adding additional mailboxes.
 *
 * Note that the duration for suggestion uses days only (no time). To get
 * suggestions for a single day, the upper bound must be the following day as
 * this example does.
 */
require_once '../../vendor/autoload.php';

use \mishanki\PhpEws\Client;
use \mishanki\PhpEws\Request\GetUserAvailabilityRequestType;

use \mishanki\PhpEws\ArrayType\ArrayOfMailboxData;

use \mishanki\PhpEws\Enumeration\ResponseClassType;
use \mishanki\PhpEws\Enumeration\SuggestionQuality;

use \mishanki\PhpEws\Type\Duration;
use \mishanki\PhpEws\Type\EmailAddressType;
use \mishanki\PhpEws\Type\MailboxData;
use \mishanki\PhpEws\Type\SuggestionsViewOptionsType;

// Replace with the email of the user, the date range you wish to get
// suggestions for, and the length of the meeting to get suggestions for.
$email = '';
$start = new DateTime('next wednesday 00:00:00');
$end = new DateTime('next thursday 00:00:00');
$meeting_duration = 60;

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
//$request->FreeBusyViewOptions = new FreeBusyViewOptionsType();
$request->MailboxDataArray = new ArrayOfMailboxData();

$request->SuggestionsViewOptions = new SuggestionsViewOptionsType();
$request->SuggestionsViewOptions->MaximumNonWorkHourResultsByDay = 0;
$request->SuggestionsViewOptions->MeetingDurationInMinutes = $meeting_duration;
$request->SuggestionsViewOptions->MinimumSuggestionQuality = SuggestionQuality::EXCELLENT;

$duration = new Duration();
$duration->StartTime = $start->format('Y-m-d');
$duration->EndTime = $end->format('Y-m-d');
$request->SuggestionsViewOptions->DetailedSuggestionsWindow = $duration;

// Add the user to get suggestions for.
$mailbox = new MailboxData();
$mailbox->Email = new EmailAddressType();
$mailbox->Email->Address = $username;
$mailbox->Email->RoutingType = 'SMTP';
$mailbox->AttendeeType = 'Required';
$mailbox->ExcludeConflicts = false;
$request->MailboxDataArray->MailboxData[] = $mailbox;

$response = $client->GetUserAvailability($request);

// Make sure the request succeeded.
$response_message = $response->SuggestionsResponse->ResponseMessage;
if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
    $code = $response_message->ResponseCode;
    $message = $response_message->MessageText;
    fwrite(
        STDERR,
        "Failed to get user availability with \"$code: $message\"\n"
    );
    exit;
}

// Iterate over the days that we have suggestions for and print the meeting
// suggestion times.
$suggestion_days = $response->SuggestionsResponse->SuggestionDayResultArray;
foreach ($suggestion_days->SuggestionDayResult as $day) {
    $date = new DateTime($day->Date);
    $output = 'Available meeting times for ' . $date->format('Y-m-d:') . "\n";
    fwrite(STDOUT, $output);

    // Iterate over the suggested times and print each one.
    foreach ($day->SuggestionArray->Suggestion as $suggestion) {
        $time = new DateTime($suggestion->MeetingTime);
        fwrite(STDOUT, '- ' . $time->format('H:i') . "\n");
    }
}
