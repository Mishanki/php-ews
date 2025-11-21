<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfNonIndexableItemDetailsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines an array of item details for non-indexable items.
 *
 * @package php-ews\Array
 */
class ArrayOfNonIndexableItemDetailsType extends ArrayType
{
    /**
     * Specifies detail information about an item that cannot be indexed.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\NonIndexableItemDetailType[]
     */
    public $NonIndexableItemDetail = array();
}
