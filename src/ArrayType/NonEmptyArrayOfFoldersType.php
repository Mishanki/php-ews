<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfFoldersType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of folders that are used in folder operations.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfFoldersType extends ArrayType
{
    /**
     * Represents a folder that primarily contains calendar items.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\CalendarFolderType[]
     */
    public $CalendarFolder = array();

    /**
     * Represents a Contacts folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\ContactsFolderType[]
     */
    public $ContactsFolder = array();

    /**
     * Identifies a folder to create, get, find, synchronize, or update.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\FolderType[]
     */
    public $Folder = array();

    /**
     * Represents a Search folder contained in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\SearchFolderType[]
     */
    public $SearchFolder = array();

    /**
     * Represents a Tasks folder in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\TasksFolderType[]
     */
    public $TasksFolder = array();
}
