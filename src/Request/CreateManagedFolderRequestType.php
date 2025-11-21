<?php
/**
 * Contains \mishanki\PhpEws\Request\CreateManagedFolderRequestType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Defines a request to add managed custom folders to a mailbox.
 *
 * @package php-ews\Request
 */
class CreateManagedFolderRequestType extends BaseRequestType
{
    /**
     * Contains an array of named managed folders to add to a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\ArrayType\NonEmptyArrayOfFolderNamesType
     */
    public $FolderNames;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
