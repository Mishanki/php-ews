<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ImAddressDictionaryType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents a collection of instant messaging addresses for a contact.
 *
 * @package php-ews\Type
 */
class ImAddressDictionaryType extends Type
{
    /**
     * Represents an instant messaging address for a contact.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\ImAddressDictionaryEntryType
     */
    public $Entry;
}
