<?php
/**
 * Contains \mishanki\PhpEws\Type\PhoneNumberDictionaryType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents a collection of telephone numbers for a contact.
 *
 * @package php-ews\Type
 */
class PhoneNumberDictionaryType extends Type
{
    /**
     * Represents a telephone number for a contact.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\PhoneNumberDictionaryEntryType[]
     */
    public $Entry;
}
