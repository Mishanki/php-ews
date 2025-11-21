<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetPhoneCallInformationType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Represents a request to get telephone call information.
 *
 * @package php-ews\Request
 */
class GetPhoneCallInformationType extends BaseRequestType
{
    /**
     * Specifies the identifier of a phone call.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\PhoneCallIdType
     */
    public $PhoneCallId;
}
