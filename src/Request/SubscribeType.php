<?php
/**
 * Contains \mishanki\PhpEws\Request\SubscribeType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Defines the properties used to create subscriptions.
 *
 * @package php-ews\Request
 */
class SubscribeType extends BaseRequestType
{
    /**
     * Represents a subscription to a pull-based event notification.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\PullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;

    /**
     * Represents a subscription to a push-based event notification.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\PushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;

    /**
     * Represents a subscription to a streaming event notification.
     *
     * @since Exchange 2010 SP1
     *
     * @var \mishanki\PhpEws\Type\StreamingSubscriptionRequest
     */
    public $StreamingSubscriptionRequest;
}
