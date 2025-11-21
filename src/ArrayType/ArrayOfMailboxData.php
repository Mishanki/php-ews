<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfMailboxData.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents a list of mailboxes to query for availability information.
 *
 * @package php-ews\Array
 */
class ArrayOfMailboxData extends ArrayType
{
    /**
     * Represents an individual mailbox user and options for the type of data to
     * be returned about the mailbox user.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\MailboxData[]
     */
    public $MailboxData = array();
}
