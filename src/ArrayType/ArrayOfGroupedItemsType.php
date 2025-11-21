<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfGroupedItemsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents a collection of groups that are found with the search and
 * aggregation criteria that is identified in the FindItem operation request.
 *
 * @package php-ews\Array
 */
class ArrayOfGroupedItemsType extends ArrayType
{
    /**
     * Represents a collection of items that are the result of a grouped
     * FindItem operation call.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\GroupedItemsType[]
     */
    public $GroupedItems = array();
}
