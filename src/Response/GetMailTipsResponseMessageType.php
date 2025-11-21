<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetMailTipsResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Represents the response message for a GetMailTips Operation.
 *
 * @package php-ews\Response
 */
class GetMailTipsResponseMessageType extends ResponseMessageType
{
    /**
     * Represents a list of mail tips response messages.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfMailTipsResponseMessageType
     */
    public $ResponseMessages;
}
