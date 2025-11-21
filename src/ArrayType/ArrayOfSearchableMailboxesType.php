<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfSearchableMailboxesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines an array of mailboxes that can be searched.
 *
 * @package php-ews\Array
 */
class ArrayOfSearchableMailboxesType extends ArrayType
{
    /**
     * Specifies a mailbox.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\SearchableMailboxType[]
     */
    public $SearchableMailbox = array();
}
