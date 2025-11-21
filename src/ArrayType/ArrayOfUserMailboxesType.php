<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfUserMailboxesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of mailboxes.
 *
 * @package php-ews\Array
 */
class ArrayOfUserMailboxesType extends ArrayType
{
    /**
     * Identifies a single user's mailbox.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\UserMailboxType[]
     */
    public $UserMailbox = array();
}
