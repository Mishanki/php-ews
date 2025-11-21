<?php
/**
 * Contains \mishanki\PhpEws\Type\WeeklyRecurrencePatternType.
 */

namespace mishanki\PhpEws\Type;

/**
 * Describes a weekly recurrence pattern.
 *
 * @package php-ews\Type
 */
class WeeklyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{
    /**
     * Describes which days of the week are in the weekly recurrence pattern.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\DaysOfWeekType
     */
    public $DaysOfWeek;

    /**
     * Specifies the first day of the week.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\DayOfWeekType
     */
    public $FirstDayOfWeek;
}
