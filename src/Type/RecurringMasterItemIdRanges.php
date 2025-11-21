<?php
/**
 * Contains \mishanki\PhpEws\Type\RecurringMasterItemIdRanges.
 */

namespace mishanki\PhpEws\Type;

/**
 * Defines an occurrence range.
 *
 * @package php-ews\Type
 */
class RecurringMasterItemIdRanges extends ItemIdType
{
    /**
     * Specifies an array of recurrence ranges.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfOccurrenceRangesType
     */
    public $Ranges;
}
