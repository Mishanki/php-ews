<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfDelegateUserType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Contains the identities of delegates to add to or update in a mailbox.
 *
 * @package php-ews\Array
 */
class ArrayOfDelegateUserType extends ArrayType
{
    /**
     * Identifies a single delegate to add to or update in a mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var \mishanki\PhpEws\Type\DelegateUserType[]
     */
    public $DelegateUser = array();
}
