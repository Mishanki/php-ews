<?php
/**
 * Contains \mishanki\PhpEws\Type\CreateRuleOperationType.
 */

namespace mishanki\PhpEws\Type;

/**
 * Represents an operation to create a new Inbox rule.
 *
 * @package php-ews\Type
 */
class CreateRuleOperationType extends RuleOperationType
{
    /**
     * Represents a rule to be created in a user's mailbox.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\RuleType
     */
    public $Rule;
}
