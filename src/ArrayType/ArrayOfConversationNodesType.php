<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfConversationNodesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines a collection of conversation nodes.
 *
 * @package php-ews\Array
 */
class ArrayOfConversationNodesType extends ArrayType
{
    /**
     * Specifies a node in a conversation.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ConversationNodeType[]
     */
    public $ConversationNode = array();
}
