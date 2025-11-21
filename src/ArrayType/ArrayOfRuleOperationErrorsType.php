<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRuleOperationErrorsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of rule validation errors on each rule field that has an
 * error.
 *
 * @package php-ews\Array
 */
class ArrayOfRuleOperationErrorsType extends ArrayType
{
    /**
     * Represents a rule operation error.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\RuleOperationErrorType[]
     */
    public $RuleOperationError = array();
}
