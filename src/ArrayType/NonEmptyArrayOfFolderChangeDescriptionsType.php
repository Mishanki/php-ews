<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfFolderChangeDescriptionsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents a set of elements that define append, set, and delete changes to
 * folder properties.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfFolderChangeDescriptionsType extends ArrayType
{
    /**
     * Represents data to append to a folder property during an UpdateFolder
     * operation.
     *
     * This property is not implemented and should not be used.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\AppendToFolderFieldType[]
     */
    public $AppendToFolderField = array();

    /**
     * Represents an operation to delete a given property from a folder during
     * an UpdateFolder operation.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\DeleteFolderFieldType[]
     */
    public $DeleteFolderField = array();

    /**
     * Represents an update to a single property on a folder in an UpdateFolder
     * operation.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\SetFolderFieldType[]
     */
    public $SetFolderField = array();
}
