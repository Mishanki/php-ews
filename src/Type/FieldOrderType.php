<?php
/**
 * Contains \mishanki\PhpEws\Type\FieldOrderType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents a single field by which to sort results and indicates the
 * direction for the sort.
 *
 * @package php-ews\Type
 */
class FieldOrderType extends Type
{
    /**
     * Identifies MAPI properties.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Describes the sort order direction.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\SortDirectionType
     */
    public $Order;
}
