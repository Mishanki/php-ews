<?php
/**
 * Contains \mishanki\PhpEws\Type\UserConfigurationDictionaryObjectType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents the value of a dictionary property.
 *
 * @package php-ews\Type
 */
class UserConfigurationDictionaryObjectType extends Type
{
    /**
     * Specifies the dictionary object type.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\UserConfigurationDictionaryObjectTypesType
     */
    public $Type;

    /**
     * Specifies the dictionary object value as a string.
     *
     * @since Exchange 2010
     *
     * @var string[]
     */
    public $Value = array();
}
