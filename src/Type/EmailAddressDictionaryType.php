<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\EmailAddressDictionaryType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents a collection of e-mail addresses for a contact.
 *
 * @package php-ews\Type
 */
class EmailAddressDictionaryType extends Type
{
    /**
     * Represents a single e-mail address for a contact.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\EmailAddressDictionaryEntryType[]
     */
    public $Entry;
}
