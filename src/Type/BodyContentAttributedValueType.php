<?php
/**
 * Contains \mishanki\PhpEws\Type\BodyContentAttributedValueType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Defines the body content of an item.
 *
 * @package php-ews\Type
 */
class BodyContentAttributedValueType extends Type
{
    /**
     * Specifies an array of attribution information for one or more of the
     * contacts or active directory recipients aggregated into the associated
     * persona.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfPersonaAttributionsType
     */
    public $Attributions;

    /**
     * Specifies the value of a BodyContentAttributedValue element.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\BodyTypeResponseType
     */
    public $Value;
}
