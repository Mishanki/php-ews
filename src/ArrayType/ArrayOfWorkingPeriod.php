<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfWorkingPeriod.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents working period information for the mailbox user.
 *
 * @package php-ews\Array
 */
class ArrayOfWorkingPeriod extends ArrayType
{
    /**
     * Contains the work week days and hours of the mailbox user.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\WorkingPeriod[]
     */
    public $WorkingPeriod = array();
}
