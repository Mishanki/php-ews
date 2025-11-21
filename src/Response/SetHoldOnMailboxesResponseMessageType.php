<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\SetHoldOnMailboxesResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines a response to a SetHoldOnMailboxes request.
 *
 * @package php-ews\Response
 */
class SetHoldOnMailboxesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the result of the request.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\MailboxHoldResultType
     */
    public $MailboxHoldResult;
}
