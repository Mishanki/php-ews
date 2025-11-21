<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetSearchableMailboxesResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Contains the response to a GetSearchableMailboxes request.
 *
 * @package php-ews\Response
 */
class GetSearchableMailboxesResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies an array of mailboxes that failed on search.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfFailedSearchMailboxesType
     */
    public $FailedMailboxes;

    /**
     * Contains an array of mailboxes.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfSearchableMailboxesType
     */
    public $SearchableMailboxes;
}
