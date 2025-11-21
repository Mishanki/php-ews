<?php
/**
 * Contains \mishanki\PhpEws\Type\RequestServerVersion.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Defines the Microsoft Exchange Server version of a request.
 *
 * @package php-ews\Type
 */
class RequestServerVersion extends Type
{
    /**
     * Identifies the Exchange Server version used in the request.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\ExchangeVersionType
     */
    public $Version;
}
