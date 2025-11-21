<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\StandardGroupByType.
 */

namespace mishanki\PhpEws\Enumeration;

use \mishanki\PhpEws\Enumeration;

/**
 * Represents the standard grouping and aggregating mechanisms for a grouped
 * FindItem operation.
 *
 * @package php-ews\Enumeration
 */
class StandardGroupByType extends Enumeration
{
    /**
     * Groups by message:ConversationTopic and aggregates on
     * item:DateTimeReceived (maximum).
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONVERSATION_TOPIC = 'ConversationTopic';
}
