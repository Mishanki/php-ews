<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetMailTipsType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Represents the recipients and types of mail tips to retrieve.
 *
 * @package php-ews\Request
 */
class GetMailTipsType extends BaseRequestType
{
    /**
     * Contains the types of mail tips requested from the service.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\MailTipTypes
     */
    public $MailTipsRequested;

    /**
     * Contains a list of recipients to check for mail tips.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfRecipientsType
     */
    public $Recipients;

    /**
     * Contains an e-mail address that a user is trying to send as.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\EmailAddressType
     */
    public $SendingAs;
}
