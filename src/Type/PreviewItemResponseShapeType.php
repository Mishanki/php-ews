<?php
/**
 * Contains \mishanki\PhpEws\Type\PreviewItemResponseShapeType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Defines the requested property set to be returned in a discovery search.
 *
 * @package php-ews\Type
 */
class PreviewItemResponseShapeType extends Type
{
    /**
     * Identifies additional properties.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Specifies either the default preview with all properties returned or a
     * compact preview with fewer properties returned.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\PreviewItemBaseShapeType
     */
    public $BaseShape;
}
