<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfExtendedPropertyAttributedValueType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines the extended properties used for a persona.
 *
 * @package php-ews\Array
 */
class ArrayOfExtendedPropertyAttributedValueType extends ArrayType
{
    /**
     * Specifies extended properties for a persona.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ExtendedPropertyAttributedValueType[]
     */
    public $ExtendedPropertyAttributedValue = array();
}
