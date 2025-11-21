<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfBodyContentAttributedValuesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines an array of BodyContentAttributedValue elements.
 *
 * @package php-ews\Array
 */
class ArrayOfBodyContentAttributedValuesType extends ArrayType
{
    /**
     * Specifies the body content of an item.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\BodyContentAttributedValueType[]
     */
    public $BodyContentAttributedValue = array();
}
