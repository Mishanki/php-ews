<?php
/**
 * Contains \mishanki\PhpEws\Response\GetPhoneCallInformationResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines a response to a single GetPhoneCallInformation request.
 *
 * @package php-ews\Response
 */
class GetPhoneCallInformationResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the state information for a phone call.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\PhoneCallInformationType
     */
    public $PhoneCallInformation;
}
