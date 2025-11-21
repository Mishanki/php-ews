<?php
/**
 * Contains \mishanki\PhpEws\Type\AppendToFolderFieldType.
 */

namespace mishanki\PhpEws\Type;

/**
 * This type element is not implemented. Any request that uses this type will
 * always return an error response.
 *
 * @package php-ews\Type
 */
class AppendToFolderFieldType extends FolderChangeDescriptionType
{
    /**
     * Represents a folder that primarily contains calendar items.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * Represents a Contacts folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * Identifies a folder to update.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\FolderType
     */
    public $Folder;

    /**
     * Represents a search folder that is contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a Tasks folder that is contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\TasksFolderType
     */
    public $TasksFolder;
}
