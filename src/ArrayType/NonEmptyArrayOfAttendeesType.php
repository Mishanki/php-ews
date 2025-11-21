<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAttendeesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents attendees who are not required to attend a meeting.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfAttendeesType extends ArrayType
{
    /**
     * Represents attendees and resources for a meeting.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\AttendeeType[]
     */
    public $Attendee = array();
}
