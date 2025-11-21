<?php
/**
 * Contains \mishanki\PhpEws\Response\FindConversationResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines a response to a FindConversation Operation request.
 *
 * @package php-ews\Response
 */
class FindConversationResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of conversations.
     *
     * @since Exchange 2010 SP1
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfConversationsType
     */
    public $Conversations;
}
