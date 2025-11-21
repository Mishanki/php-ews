<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfSearchPreviewItemsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines a list of items available for preview.
 *
 * @package php-ews\Array
 */
class ArrayOfSearchPreviewItemsType extends ArrayType
{
    /**
     * Specifies an item preview for a discovery search.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\SearchPreviewItemType[]
     */
    public $SearchPreviewItem = array();
}
