<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfRuleOperationsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of rule operations that can be performed on an Inbox.
 *
 * @package php-ews\Array
 */
class ArrayOfRuleOperationsType extends ArrayType
{
    /**
     * Represents an operation to create a new Inbox rule.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\CreateRuleOperationType[]
     */
    public $CreateRuleOperation = array();

    /**
     * Represents an operation to delete an Inbox rule.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\DeleteRuleOperationType[]
     */
    public $DeleteRuleOperation = array();

    /**
     * Represents an operation to update an Inbox rule.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\SetRuleOperationType[]
     */
    public $SetRuleOperation = array();
}
