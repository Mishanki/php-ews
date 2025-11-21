<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines additional properties for use in GetItem, UpdateItem, CreateItem,
 * FindItem, or FindFolder requests.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfPathsToElementType extends ArrayType
{
    /**
     * Identifies extended MAPI properties to get, set, or create.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\PathToExtendedFieldType[]
     */
    public $ExtendedFieldURI = array();

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\PathToUnindexedFieldType[]
     */
    public $FieldURI = array();

    /**
     * Identifies frequently referenced dictionary properties by URI.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\PathToIndexedFieldType[]
     */
    public $IndexedFieldURI = array();
}
