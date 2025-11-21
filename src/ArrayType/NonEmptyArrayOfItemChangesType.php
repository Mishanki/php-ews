<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfItemChangesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of ItemChange elements that identify items and the
 * updates to apply to the items.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfItemChangesType extends ArrayType
{
    /**
     * Contains an item identifier and the updates to apply to the item.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\ItemChangeType[]
     */
    public $ItemChange = array();
}
