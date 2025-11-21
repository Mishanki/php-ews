<?php
/**
 * Contains \mishanki\PhpEws\Type\CalendarFolderType.
 */

namespace mishanki\PhpEws\Type;

/**
 * Represents a folder that primarily contains calendar items.
 *
 * @package php-ews\Type
 */
class CalendarFolderType extends BaseFolderType
{
    /**
     * Contains all the configured permissions for a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var \mishanki\PhpEws\Type\CalendarPermissionSetType
     */
    public $PermissionSet;

    /**
     * Indicates the permissions that the user has for the calendar data that is
     * being shared.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\CalendarPermissionReadAccessType
     */
    public $SharingEffectiveRights;
}
