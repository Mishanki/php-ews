<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfConversationsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of conversations.
 *
 * @package php-ews\Array
 */
class ArrayOfConversationsType extends ArrayType
{
    /**
     * Represents a single conversation.
     *
     * @since Exchange 2010 SP1
     *
     * @var \mishanki\PhpEws\Type\ConversationType[]
     */
    public $Conversation = array();
}
