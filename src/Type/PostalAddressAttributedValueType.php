<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PostalAddressAttributedValueType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Defines an instance of an array of postal addresses and their associated
 * attributions.
 *
 * @package php-ews\Type
 */
class PostalAddressAttributedValueType extends Type
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
     * Specifies information associated with a postal address.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\PersonaPostalAddressType
     */
    public $Value;
}
