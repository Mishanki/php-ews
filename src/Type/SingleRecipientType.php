<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SingleRecipientType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Identifies the delegate in a delegate access scenario.
 *
 * @package php-ews\Type
 */
class SingleRecipientType extends Type
{
    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
