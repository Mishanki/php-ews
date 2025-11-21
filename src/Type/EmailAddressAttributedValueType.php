<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\EmailAddressAttributedValueType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Defines an instance of an array of email addresses and their associated
 * attributions.
 *
 * @package php-ews\Type
 */
class EmailAddressAttributedValueType extends Type
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
     * Specifies the value of an EmailAddress associated with an attributions array.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\EmailAddressType
     */
    public $Value;
}
