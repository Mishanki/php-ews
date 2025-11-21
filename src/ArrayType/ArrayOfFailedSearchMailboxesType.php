<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfFailedSearchMailboxesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines an array of mailboxes that failed on search.
 *
 * @package php-ews\Array
 */
class ArrayOfFailedSearchMailboxesType extends ArrayType
{
    /**
     * Specifies the error message for a mailbox that failed on search.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\FailedSearchMailboxType[]
     */
    public $FailedMailbox = array();
}
