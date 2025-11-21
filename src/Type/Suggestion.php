<?php
/**
 * Contains \mishanki\PhpEws\Type\Suggestion.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents a single meeting suggestion.
 *
 * @package php-ews\Type
 */
class Suggestion extends Type
{
    /**
     * Contains an array of information that describes conflicts between users
     * and resources and the suggested meeting time.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfAttendeeConflictData
     */
    public $AttendeeConflictDataArray;

    /**
     * Represents whether the suggested meeting time occurs during scheduled
     * work hours.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsWorkTime;

    /**
     * Represents a suggested meeting time.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $MeetingTime;

    /**
     * Represents the quality of the suggested meeting time.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\SuggestionQuality
     */
    public $SuggestionQuality;
}
