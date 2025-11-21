<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfSuggestion.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of meeting suggestions.
 *
 * @package php-ews\Array
 */
class ArrayOfSuggestion extends ArrayType
{
    /**
     * Represents a single meeting suggestion.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\Suggestion[]
     */
    public $Suggestion = array();
}
