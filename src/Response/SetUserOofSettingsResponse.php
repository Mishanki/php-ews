<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\SetUserOofSettingsResponse.
 */

namespace mishanki\PhpEws\Response;

use \mishanki\PhpEws\Response;

/**
 * Defines the result of a SetUserOofSettingsRequest message attempt.
 *
 * @package php-ews\Response
 */
class SetUserOofSettingsResponse extends Response
{
    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Response\ResponseMessageType
     */
    public $ResponseMessage;
}
