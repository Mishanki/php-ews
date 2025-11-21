<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfCalendarEvent.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents a set of unique calendar item occurrences that represent the
 * requested user's availability.
 *
 * @package php-ews\Array
 */
class ArrayOfCalendarEvent extends ArrayType
{
    /**
     * Represents a unique calendar item occurrence.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\CalendarEvent[]
     */
    public $CalendarEvent = array();
}
