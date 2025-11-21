<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfRecipientTrackingEventType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents a collection of one or more events for a message.
 *
 * @package php-ews\Array
 */
class ArrayOfRecipientTrackingEventType extends ArrayType
{
    /**
     * Contains details for a specific event in the tracking report.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\RecipientTrackingEventType[]
     */
    public $RecipientTrackingEvent = array();
}
