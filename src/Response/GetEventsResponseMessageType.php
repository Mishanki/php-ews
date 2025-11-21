<?php
/**
 * Contains \mishanki\PhpEws\Response\GetEventsResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Represents the status and result of a single GetEvents operation request.
 *
 * @package php-ews\Response
 */
class GetEventsResponseMessageType extends ResponseMessageType
{
    /**
     * Contains information about the subscription and the events that have
     * occurred since the last notification.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\NotificationType
     */
    public $Notification;
}
