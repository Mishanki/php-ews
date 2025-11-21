<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfInvalidRecipientsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents the recipients of a folder sharing request that are invalid.
 *
 * @package php-ews\Array
 */
class ArrayOfInvalidRecipientsType extends ArrayType
{
    /**
     * Contains the SMTP address of the invalid recipient and information about
     * why the recipient is invalid.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\InvalidRecipientType[]
     */
    public $InvalidRecipient = array();
}
