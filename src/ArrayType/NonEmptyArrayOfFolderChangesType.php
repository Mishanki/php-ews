<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfFolderChangesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents a collection of changes for a folder.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfFolderChangesType extends ArrayType
{
    /**
     * Represents a single change to be performed on a single folder.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\FolderChangeType[]
     */
    public $FolderChange = array();
}
