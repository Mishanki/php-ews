<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PhoneNumberAttributedValueType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents a phone number and its associated attributions.
 *
 * @package php-ews\Type
 */
class PhoneNumberAttributedValueType extends Type
{
    /**
     * Specifies an array of attributions for the Value element.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfValueAttributionsType
     */
    public $Attributions;

    /**
     * Specifies a phone number and type information.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\PersonaPhoneNumberType
     */
    public $Value;
}
