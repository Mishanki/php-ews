<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfOccurrenceRangesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines an array of recurrence ranges.
 *
 * @package php-ews\Array
 */
class ArrayOfOccurrenceRangesType extends ArrayType
{
    /**
     * Specifies a range of calendar item occurrences for a repeating calendar
     * item.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\OccurrencesRangeType[]
     */
    public $Range = array();
}
