<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\RoutingType.
 */

namespace mishanki\PhpEws\Enumeration;

use \mishanki\PhpEws\Enumeration;

/**
 * Represents the routing protocol for a recipient.
 *
 * @package php-ews\Enumeration
 */
class RoutingType extends Enumeration
{
    /**
     * Route the email using the SMTP protocol.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SMTP = 'SMTP';
}
