<?php
/**
 * Contains \mishanki\PhpEws\Type\ContactsFolderType.
 */

namespace mishanki\PhpEws\Type;

/**
 * Represents a contacts folder that is contained in a mailbox.
 *
 * @package php-ews\Type
 */
class ContactsFolderType extends BaseFolderType
{
    /**
     * Contains all the configured permissions for a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var \mishanki\PhpEws\Type\PermissionSetType
     */
    public $PermissionSet;

    /**
     * Indicates the permissions that the user has for the contact data that is
     * being shared.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\PermissionReadAccessType
     */
    public $SharingEffectiveRights;
}
