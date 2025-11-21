<?php
/**
 * Contains \mishanki\PhpEws\Type\ExtendedPropertyAttributedValueType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Defines an extended property for a persona.
 *
 * @package php-ews\Type
 */
class ExtendedPropertyAttributedValueType extends Type
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
     * Specifies an extended property for a persona.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ExtendedPropertyType
     */
    public $Value;
}
