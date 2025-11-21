<?php
/**
 * This example shows how to send a message that was created as a draft. To
 * create such a message, see the message/create example. For this request, the
 * change key is required.
 */

require_once '../../vendor/autoload.php';

use \mishanki\PhpEws\Client;
use \mishanki\PhpEws\Request\SendItemType;

use \mishanki\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \mishanki\PhpEws\Enumeration\ResponseClassType;

use \mishanki\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType;

use \mishanki\PhpEws\Type\DistinguishedFolderIdType;
use \mishanki\PhpEws\Type\ItemIdType;
use \mishanki\PhpEws\Type\TargetFolderIdType;

// Replace with the id and change key of the message to be sent.
$message_id = 'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEPAAAr1MfeoTJdQ7jgaw/bSgljAABueQnrAAA=';
$change_key = 'CQAAABYAAAAr1MfeoTJdQ7jgaw/bSgljAABugzYP';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request.
$request = new SendItemType();
$request->SaveItemToFolder = true;
$request->ItemIds = new NonEmptyArrayOfBaseItemIdsType();

// Add the message to the request.
$item = new ItemIdType();
$item->Id = $message_id;
$item->ChangeKey = $change_key;
$request->ItemIds->ItemId[] = $item;

// Configure the folder to save the sent message to.
$send_folder = new TargetFolderIdType();
$send_folder->DistinguishedFolderId = new DistinguishedFolderIdType();
$send_folder->DistinguishedFolderId->Id = DistinguishedFolderIdNameType::SENT;
$request->SavedItemFolderId = $send_folder;

$response = $client->SendItem($request);

// Iterate over the results, printing any error messages.
$response_messages = $response->ResponseMessages->SendItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Message failed to send with \"$code: $message\"\n");
        continue;
    }

    fwrite(STDOUT, "Message sent successfully.\n");
}
