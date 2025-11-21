<?php
/**
 * Contains \mishanki\PhpEws\Response\PlayOnPhoneResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines the response to a request to play a voice mail over the telephone.
 *
 * @package php-ews\Response
 */
class PlayOnPhoneResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the telephone call identifier.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\PhoneCallIdType
     */
    public $PhoneCallId;
}
