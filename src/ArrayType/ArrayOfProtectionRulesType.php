<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfProtectionRulesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of protection rules.
 *
 * @package php-ews\Array
 */
class ArrayOfProtectionRulesType extends ArrayType
{
    /**
     * Contains a single protection rule.
     *
     * This element can occur zero or more times. This element occurs zero times
     * when no protection rules are defined by the organization. It occurs one
     * or more times if at least one rule is defined by the organization.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\ProtectionRuleType[]
     */
    public $Rule = array();
}
