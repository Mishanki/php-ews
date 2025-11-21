<?php
/**
 * Contains \mishanki\PhpEws\Type\WorkingHours.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents the time zone settings and working hours for the requested mailbox
 * user.
 *
 * @package php-ews\Type
 */
class WorkingHours extends Type
{
    /**
     * Contains elements that identify time zone information.
     *
     * This element also contains information about the transition between
     * standard time and daylight saving time.
     *
     * This element is required if the WorkingHours element is used.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\SerializableTimeZone
     */
    public $TimeZone;

    /**
     * Contains working period information for the mailbox user.
     *
     * This element is required if the WorkingHours element is used.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
}
