<?php
/**
 * Contains \mishanki\PhpEws\Request\ExpandDLType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Defines a request to expand a distribution list.
 *
 * @package php-ews\Request
 */
class ExpandDLType extends BaseRequestType
{
    /**
     * Identifies a fully resolved e-mail address of a distribution list.
     *
     * This mailbox represents the distribution list to expand.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
