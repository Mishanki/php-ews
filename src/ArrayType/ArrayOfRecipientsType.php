<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRecipientsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of recipients of an item.
 *
 * @package php-ews\Array
 */
class ArrayOfRecipientsType extends ArrayType
{
    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\EmailAddressType[]
     */
    public $Mailbox = array();
}
