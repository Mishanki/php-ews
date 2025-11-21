<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UserConfigurationDictionaryEntryType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents the contents of a single dictionary entry property.
 *
 * @package php-ews\Type
 */
class UserConfigurationDictionaryEntryType extends Type
{
    /**
     * Specifies the dictionary key for a dictionary property.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\UserConfigurationDictionaryObjectType
     */
    public $DictionaryKey;

    /**
     * Specifies the dictionary value for a dictionary property.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\UserConfigurationDictionaryObjectType
     */
    public $DictionaryValue;
}
