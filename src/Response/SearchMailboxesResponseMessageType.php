<?php
/**
 * Contains \mishanki\PhpEws\Response\SearchMailboxesResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines the response message for a SearchMailboxes request.
 *
 * @package php-ews\Response
 */
class SearchMailboxesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the result of the request.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\SearchMailboxesResultType
     */
    public $SearchMailboxesResult;
}
