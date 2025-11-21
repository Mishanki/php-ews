<?php
/**
 * Contains \mishanki\PhpEws\Type\RelativeMonthlyRecurrencePatternType.
 */

namespace mishanki\PhpEws\Type;

/**
 * Describes a relative monthly recurrence pattern.
 *
 * @package php-ews\Type
 */
class RelativeMonthlyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{
    /**
     * Describes which week is used in a relative monthly recurrence pattern.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Describes which days of the week are in the relative monthly recurrence
     * pattern.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\DayOfWeekType
     */
    public $DaysOfWeek;
}
