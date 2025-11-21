<?php
/**
 * Contains \mishanki\PhpEws\Type\MailboxStatisticsItemType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Defines statistics for a mailbox.
 *
 * @package php-ews\Type
 */
class MailboxStatisticsItemType extends Type
{
    /**
     * Display name of the mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $DisplayName;

    /**
     * Specifies the total number of items in a search result.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $ItemCount;

    /**
     * Identifier for the mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $MailboxId;

    /**
     * Total size of one or more mailbox items.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $Size;
}
