<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfMailboxStatisticsItemsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines a list of one or more mailbox stats.
 *
 * @package php-ews\Array
 */
class ArrayOfMailboxStatisticsItemsType extends ArrayType
{
    /**
     * Mailbox statistics.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\MailboxStatisticsItemType[]
     */
    public $MailboxStat = array();
}
