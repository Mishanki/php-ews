<?php
/**
 * Contains \mishanki\PhpEws\Type\SmtpDomainList.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Identifies a list of internal SMTP domains of the organization.
 *
 * @package php-ews\Type
 */
class SmtpDomainList extends Type
{
    /**
     * Identifies a single SMTP domain.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\SmtpDomain
     */
    public $Domain;
}
