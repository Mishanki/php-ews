<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfNonIndexableItemStatisticsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines an array of statistics for items that could not be indexed.
 *
 * @package php-ews\Array
 */
class ArrayOfNonIndexableItemStatisticsType extends ArrayType
{
    /**
     * Contains a single statistic for an item that could not be indexed.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\NonIndexableItemStatisticType[]
     */
    public $NonIndexableItemStatistic = array();
}
