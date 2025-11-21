<?php
require_once '../../vendor/autoload.php';

use \mishanki\PhpEws\Client;
use \mishanki\PhpEws\Request\GetItemType;

use \mishanki\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType;
use \mishanki\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType;

use \mishanki\PhpEws\Enumeration\DefaultShapeNamesType;
use \mishanki\PhpEws\Enumeration\DistinguishedPropertySetType;
use \mishanki\PhpEws\Enumeration\MapiPropertyTypeType;
use \mishanki\PhpEws\Enumeration\ResponseClassType;

use \mishanki\PhpEws\Type\ItemIdType;
use \mishanki\PhpEws\Type\ItemResponseShapeType;
use \mishanki\PhpEws\Type\PathToExtendedFieldType;

// Replace this with the ids of actual events.
$event_ids = array(
    'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAENAAAr1MfeoTJdQ7jgaw/bSgljAABPwPPwAAA=',
);

// Replace with the timezone you would like the event times displayed in or
// clear for UTC.
$timezone = 'Eastern Standard Time';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);
$client->setTimezone($timezone);

// Build the request.
$request = new GetItemType();
$request->ItemShape = new ItemResponseShapeType();
$request->ItemShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;
$request->ItemIds = new NonEmptyArrayOfBaseItemIdsType();

// We want to get the online meeting link in the response. Note that if this
// property is not set on the event, it will not be included in the response.
$property = new PathToExtendedFieldType();
$property->PropertyName = 'OnlineMeetingExternalLink';
$property->PropertyType = MapiPropertyTypeType::STRING;
$property->DistinguishedPropertySetId = DistinguishedPropertySetType::PUBLIC_STRINGS;

$additional_properties = new NonEmptyArrayOfPathsToElementType();
$additional_properties->ExtendedFieldURI[] = $property;
$request->ItemShape->AdditionalProperties = $additional_properties;

// Iterate over the event ids, setting each one on the request.
foreach ($event_ids as $event_id) {
    $item = new ItemIdType();
    $item->Id = $event_id;
    $request->ItemIds->ItemId[] = $item;
}

$response = $client->GetItem($request);

// Iterate over the results, printing any error messages or event names.
$response_messages = $response->ResponseMessages->GetItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        fwrite(STDERR, "Failed to get event with \"$message\"\n");
        continue;
    }

    // Iterate over the events, printing the title for each.
    foreach ($response_message->Items->CalendarItem as $item) {
        $subject = $item->Subject;
        fwrite(STDOUT, "Retrieved event $subject\n");
    }
}
