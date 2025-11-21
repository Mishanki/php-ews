<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\CreateFolderPathType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Represents a request to create a folder path.
 *
 * @package php-ews\Request
 */
class CreateFolderPathType extends BaseRequestType
{
    /**
     * Identifies the folder in which a new folder is created.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\TargetFolderIdType
     */
    public $ParentFolderId;

    /**
     * Contains an array of folders that indicate the relative folder path of
     * the folder path to be created.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\NonEmptyArrayOfFoldersType
     */
    public $RelativeFolderPath;
}
