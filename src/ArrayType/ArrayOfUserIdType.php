<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfUserIdType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines an array of delegate users to get or remove from a principal's
 * mailbox.
 *
 * @package php-ews\Array
 */
class ArrayOfUserIdType extends ArrayType
{
    /**
     * Identifies a delegate to get or remove from a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var \mishanki\PhpEws\Type\UserIdType[]
     */
    public $UserId = array();
}
