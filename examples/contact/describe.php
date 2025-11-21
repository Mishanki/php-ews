<?php
require_once '../../vendor/autoload.php';

use \mishanki\PhpEws\Client;
use \mishanki\PhpEws\Request\GetItemType;

use \mishanki\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType;

use \mishanki\PhpEws\Enumeration\DefaultShapeNamesType;
use \mishanki\PhpEws\Enumeration\ResponseClassType;

use \mishanki\PhpEws\Type\ItemIdType;
use \mishanki\PhpEws\Type\ItemResponseShapeType;

// Replace this with the ids of actual contacts.
$contacts_ids = array(
    'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEOAAAr1MfeoTJdQ7jgaw/bSgljAABVAqj7AAA=',
    'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEOAAAr1MfeoTJdQ7jgaw/bSgljAABVAqjwAAA=',
);

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request.
$request = new GetItemType();
$request->ItemShape = new ItemResponseShapeType();
$request->ItemShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;
$request->ItemIds = new NonEmptyArrayOfBaseItemIdsType();

// Iterate over the contact ids, setting each one on the request.
foreach ($contacts_ids as $contact_id) {
    $item = new ItemIdType();
    $item->Id = $contact_id;
    $request->ItemIds->ItemId[] = $item;
}

$response = $client->GetItem($request);

// Iterate over the results, printing any error messages or contact names.
$response_messages = $response->ResponseMessages->GetItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Failed to get contact with \"$code: $message\"\n");
        continue;
    }

    // Iterate over the contacts.
    foreach ($response_message->Items->Contact as $item) {
        $name = $item->DisplayName;
        fwrite(STDOUT, "Retrieved contact $name\n");
    }
}
