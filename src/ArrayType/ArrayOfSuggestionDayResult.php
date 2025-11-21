<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfSuggestionDayResult.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of meeting suggestions organized by date.
 *
 * @package php-ews\Array
 */
class ArrayOfSuggestionDayResult extends ArrayType
{
    /**
     * Represents a single day that contains suggested meeting times.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\SuggestionDayResult[]
     */
    public $SuggestionDayResult = array();
}
