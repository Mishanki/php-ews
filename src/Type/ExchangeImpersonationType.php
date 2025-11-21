<?php
/**
 * Contains \mishanki\PhpEws\Type\ExchangeImpersonationType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents the account to impersonate within a request.
 *
 * @package php-ews\Type
 */
class ExchangeImpersonationType extends Type
{
    /**
     * Represents an account to impersonate when you are using the
     * ExchangeImpersonation SOAP header.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\ConnectingSIDType
     */
    public $ConnectingSID;
}
