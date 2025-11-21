<?php
/**
 * Contains \mishanki\PhpEws\Type\StringArrayAttributedValueType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Defines an instance of an array of string data.
 *
 * @package php-ews\Type
 */
class StringArrayAttributedValueType extends Type
{
    /**
     * Specifies an array of attributions for its associated Value element.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfValueAttributionsType
     */
    public $Attributions;

    /**
     * Contains the value of the extended property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Value;
}
