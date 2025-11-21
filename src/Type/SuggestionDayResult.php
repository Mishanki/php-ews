<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SuggestionDayResult.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents a single day that contains suggested meeting times.
 *
 * @package php-ews\Type
 */
class SuggestionDayResult extends Type
{
    /**
     * Represents the date that contains the suggested meeting times.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Date;

    /**
     * Represents the quality of the day for containing quality suggested
     * meeting times.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\SuggestionQuality
     */
    public $DayQuality;

    /**
     * Contains an array of meeting suggestions.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfSuggestion
     */
    public $SuggestionArray;
}
