<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfSearchRefinerItemsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines a list of one or more refiners.
 *
 * @package php-ews\Array
 */
class ArrayOfSearchRefinerItemsType extends ArrayType
{
    /**
     * Search refiners.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\SearchRefinerItemType[]
     */
    public $Refiner = array();
}
