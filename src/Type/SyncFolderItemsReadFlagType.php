<?php
/**
 * Contains \mishanki\PhpEws\Type\SyncFolderItemsReadFlagType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Identifies whether or not an item has been read.
 *
 * @package php-ews\Type
 */
class SyncFolderItemsReadFlagType extends Type
{
    /**
     * Indicates whether the read-flag has been set to true.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * Identifies the item for which the read-flag has been changed.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\ItemIdType
     */
    public $ItemId;
}
