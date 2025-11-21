<?php
/**
 * Contains \mishanki\PhpEws\Request\UnsubscribeType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Defines the properties used to unsubscribe from a subscription.
 *
 * @package php-ews\Request
 */
class UnsubscribeType extends BaseRequestType
{
    /**
     * Represents the identifier for a subscription.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $SubscriptionId;
}
