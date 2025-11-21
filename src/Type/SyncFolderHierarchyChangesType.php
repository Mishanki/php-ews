<?php
/**
 * Contains \mishanki\PhpEws\Type\SyncFolderHierarchyChangesType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents a sequenced array of change types that represent the type of
 * differences between the folders on the client and the folders on the computer
 * that is running Microsoft Exchange Server 2007.
 *
 * @package php-ews\Type
 */
class SyncFolderHierarchyChangesType extends Type
{
    /**
     * Identifies a single folder to create in the local client store.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\SyncFolderHierarchyCreateOrUpdateType
     */
    public $Create;

    /**
     * Identifies a single folder to delete in the local client store.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\SyncFolderHierarchyDeleteType
     */
    public $Delete;

    /**
     * Identifies a single folder to update in the local client store.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\SyncFolderHierarchyCreateOrUpdateType
     */
    public $Update;
}
