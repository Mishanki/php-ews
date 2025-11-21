<?php
/**
 * Contains \mishanki\PhpEws\Type\ProtectionRuleSenderDepartmentsType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Specifies that the department of the sender matches any of the specified
 * departments in the child Value (ProtectionRuleValueType) elements.
 *
 * @package php-ews\Type
 */
class ProtectionRuleSenderDepartmentsType extends Type
{
    /**
     * Identifies a single sender department.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Value;
}
