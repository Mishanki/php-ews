<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfFolderIdType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines a list of folder identifiers.
 *
 * @package php-ews\Array
 */
class ArrayOfFolderIdType extends ArrayType
{
    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\FolderIdType[]
     */
    public $FolderId = array();
}
