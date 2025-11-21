<?php
/**
 * Contains \mishanki\PhpEws\Response\GetConversationItemsResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines the response message for a GetConversationItems request.
 *
 * @package php-ews\Response
 */
class GetConversationItemsResponseMessageType extends ResponseMessageType
{
    /**
     * Represents a single conversation.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ConversationResponseType
     */
    public $Conversation;
}
