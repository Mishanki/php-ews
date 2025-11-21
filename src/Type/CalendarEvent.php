<?php
/**
 * Contains \mishanki\PhpEws\Type\CalendarEvent.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents a unique calendar item occurrence.
 *
 * @package php-ews\Type
 */
class CalendarEvent extends Type
{
    /**
     * Represents the start of a calendar event.
     *
     * This property is required.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $StartTime;

    /**
     * Represents the end of a calendar event.
     *
     * This property is required,
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $EndTime;

    /**
     * Represents the free/busy status set for a calendar event.
     *
     * This property is required.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\LegacyFreeBusyType
     */
    public $BusyType;

    /**
     * Provides additional information for a calendar event.
     *
     * This property is optional.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\CalendarEventDetails
     */
    public $CalendarEventDetails;
}
