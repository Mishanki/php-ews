<?php
/**
 * This example shows how to list the OWA.UserOptions configuration for a user.
 */
require_once '../../vendor/autoload.php';

use \mishanki\PhpEws\Client;
use \mishanki\PhpEws\Request\GetUserConfigurationType;

use \mishanki\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \mishanki\PhpEws\Enumeration\ResponseClassType;
use \mishanki\PhpEws\Enumeration\UserConfigurationPropertyType;

use \mishanki\PhpEws\Type\DistinguishedFolderIdType;
use \mishanki\PhpEws\Type\UserConfigurationNameType;

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

$request = new GetUserConfigurationType();
$request->UserConfigurationProperties = UserConfigurationPropertyType::ALL;

// Set the name of the configuration to retrieve.
$name = new UserConfigurationNameType();
$name->DistinguishedFolderId = new DistinguishedFolderIdType();
$name->DistinguishedFolderId->Id = DistinguishedFolderIdNameType::ROOT;
$name->Name = 'OWA.UserOptions';
$request->UserConfigurationName = $name;

$response = $client->GetUserConfiguration($request);

// Iterate over the results, printing any error messages or options and their
// values.
$response_messages = $response->ResponseMessages
    ->GetUserConfigurationResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(
            STDERR,
            "Failed to get User Configuration with \"$code: $message\"\n"
        );
        continue;
    }

    $config = $response_message->UserConfiguration;
    $name = $config->UserConfigurationName->Name;
    foreach ($config->Dictionary->DictionaryEntry as $entry) {
        $key = $entry->DictionaryKey->Value[0];
        $value = implode(', "', $entry->DictionaryValue->Value);
        fwrite(STDOUT, "$name.$key = \"$value\"\n");
    }
}
