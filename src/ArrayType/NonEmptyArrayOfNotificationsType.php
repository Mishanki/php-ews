<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfNotificationsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of information about the subscription and the events that
 * have occurred since the last notification.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfNotificationsType extends ArrayType
{
    /**
     * Contains information about the subscription and the events that have
     * occurred since the last notification.
     *
     * @since Exchange 2010 SP1
     *
     * @var \mishanki\PhpEws\Type\NotificationType[]
     */
    public $Notification = array();
}
