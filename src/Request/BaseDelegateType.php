<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\BaseDelegateType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Base class for delegate requests.
 *
 * @package php-ews\Request
 */
abstract class BaseDelegateType extends BaseRequestType
{
    /**
     * Identifies the principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var \mishanki\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
