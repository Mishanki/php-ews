<?php
require_once '../../vendor/autoload.php';

use \mishanki\PhpEws\Client;
use \mishanki\PhpEws\Request\FindItemType;

use \mishanki\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType;

use \mishanki\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \mishanki\PhpEws\Enumeration\ResponseClassType;

use \mishanki\PhpEws\Type\ContactsViewType;
use \mishanki\PhpEws\Type\DistinguishedFolderIdType;

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request.
$request = new FindItemType();
$request->ParentFolderIds = new NonEmptyArrayOfBaseFolderIdsType();
$request->ContactsView = new ContactsViewType();

// Find contacts in the contacts folder.
$folder_id = new DistinguishedFolderIdType();
$folder_id->Id = DistinguishedFolderIdNameType::CONTACTS;
$request->ParentFolderIds->DistinguishedFolderId[] = $folder_id;

$response = $client->FindItem($request);

// Iterate over the results, printing any error messages or contact ids.
$response_messages = $response->ResponseMessages->FindItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(
            STDERR,
            "Failed to search for contacts with \"$code: $message\"\n"
        );
        continue;
    }

    // Iterate over the contacts that were found, printing the id of each.
    $items = $response_message->RootFolder->Items->Contact;
    foreach ($items as $item) {
        $id = $item->ItemId->Id;
        fwrite(STDOUT, "Found contact $id\n");
    }
}
