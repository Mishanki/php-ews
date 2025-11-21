<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAlternateIdsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines the source identifiers to convert.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfAlternateIdsType extends ArrayType
{
    /**
     * Describes an item or folder identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var \mishanki\PhpEws\Type\AlternateIdType[]
     */
    public $AlternateId = array();

    /**
     * Describes a public folder identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var \mishanki\PhpEws\Type\AlternatePublicFolderIdType[]
     */
    public $AlternatePublicFolderId = array();

    /**
     * Describes a public folder item identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var \mishanki\PhpEws\Type\AlternatePublicFolderItemIdType[]
     */
    public $AlternatePublicFolderItemId = array();
}
