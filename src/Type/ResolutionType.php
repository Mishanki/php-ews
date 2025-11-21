<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ResolutionType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents a single resolved entity.
 *
 * @package php-ews\Type
 */
class ResolutionType extends Type
{
    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\ContactItemType
     */
    public $Contact;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
