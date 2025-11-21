<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfDeletedOccurrencesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of deleted occurrences of a recurring calendar item.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfDeletedOccurrencesType extends ArrayType
{
    /**
     * Represents a deleted occurrence of a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\DeletedOccurrenceInfoType[]
     */
    public $DeletedOccurrence = array();
}
