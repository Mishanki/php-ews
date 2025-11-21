<?php
/**
 * Contains \mishanki\PhpEws\Response\FindMailboxStatisticsByKeywordsResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Represents the response message for a FindMailboxStatisticsByKeywords
 * request.
 *
 * @package php-ews\Type
 */
class FindMailboxStatisticsByKeywordsResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the result of a mailbox search.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\MailboxStatisticsSearchResultType
     */
    public $MailboxStatisticsSearchResult;
}
