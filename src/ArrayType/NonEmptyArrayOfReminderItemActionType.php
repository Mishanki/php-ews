<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfReminderItemActionType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines the actions for reminder items.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfReminderItemActionType extends ArrayType
{
    /**
     * Specifies the action for a reminder item.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ReminderItemActionType[]
     */
    public $ReminderItemAction = array();
}
