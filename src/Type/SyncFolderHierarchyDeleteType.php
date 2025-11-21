<?php
/**
 * Contains \mishanki\PhpEws\Type\SyncFolderHierarchyDeleteType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Identifies a single folder to delete in the local client store.
 *
 * @package php-ews\Type
 */
class SyncFolderHierarchyDeleteType extends Type
{
    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\FolderIdType
     */
    public $FolderId;
}
