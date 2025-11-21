<?php
/**
 * Contains \mishanki\PhpEws\Type\SearchExpressionType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents the substituted element within a restriction.
 *
 * @package php-ews\Type
 *
 * @todo Determine which classes need to extend this.
 */
abstract class SearchExpressionType extends Type
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
}
