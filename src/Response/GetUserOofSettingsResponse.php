<?php
/**
 * Contains \mishanki\PhpEws\Response\GetUserOofSettingsResponse.
 */

namespace mishanki\PhpEws\Response;

use \mishanki\PhpEws\Response;

/**
 * Represents the response message and the Out of Office (OOF) settings for a
 * user.
 *
 * @package php-ews\Response
 */
class GetUserOofSettingsResponse extends Response
{
    /**
     * Contains a value that identifies to whom external OOF messages are sent.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\ExternalAudience
     */
    public $AllowExternalOof;

    /**
     * Contains the OOF settings.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\UserOofSettings
     */
    public $OofSettings;

    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Response\ResponseMessageType
     */
    public $ResponseMessage;
}
