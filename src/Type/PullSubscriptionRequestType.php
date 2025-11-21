<?php
/**
 * Contains \mishanki\PhpEws\Type\PullSubscriptionRequestType.
 */

namespace mishanki\PhpEws\Type;

/**
 * Represents a subscription to a pull-based event notification subscription.
 *
 * @package php-ews\Type
 */
class PullSubscriptionRequestType extends BaseSubscriptionRequestType
{
    /**
     * Represents the duration, in minutes, that the subscription can remain
     * idle without a GetEvents request from the client.
     *
     * @since Exchange 2007
     *
     * @var integer
     *
     * @todo Determine if we need SubscriptionTimeoutType.
     */
    public $Timeout;
}
