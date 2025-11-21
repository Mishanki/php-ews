<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of names and the identifiers of their source attributions
 * for the associated persona.
 *
 * @package php-ews\Array
 */
class ArrayOfStringAttributedValuesType extends ArrayType
{
    /**
     * Specifies an instance in an array of attributes associated with a persona
     * element.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\StringAttributedValueType[]
     */
    public $StringAttributedValue = array();
}
