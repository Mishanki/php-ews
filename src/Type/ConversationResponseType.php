<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ConversationResponseType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Defines a single conversation.
 *
 * @package php-ews\Type
 */
class ConversationResponseType extends Type
{
    /**
     * Indicates whether the conversation can be deleted.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $CanDelete;

    /**
     * Contains the identifier of the conversation.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ItemIdType
     */
    public $ConversationId;

    /**
     * Specifies a collection of conversation nodes.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfConversationNodesType
     */
    public $ConversationNodes;

    /**
     * Specifies the synchronization state of a conversation.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $SyncState;
}
