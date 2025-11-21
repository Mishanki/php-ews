<?php
/**
 * Contains \mishanki\PhpEws\Type\SendNotificationResultType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Defines the response of a client application to a push notification.
 *
 * @package php-ews\Type
 */
class SendNotificationResultType extends Type
{
    /**
     * Describes the status of a push subscription.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\SubscriptionStatusType
     */
    public $SubscriptionStatus;
}
