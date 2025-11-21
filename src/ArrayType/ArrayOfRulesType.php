<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRulesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of rules in the user's mailbox.
 *
 * @package php-ews\Array
 */
class ArrayOfRulesType extends ArrayType
{
    /**
     * Contains a single rule and represents a rule in the user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\RuleType[]
     */
    public $Rule = array();
}
