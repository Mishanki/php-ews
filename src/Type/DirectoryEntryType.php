<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\DirectoryEntryType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents a directory entry.
 *
 * @package php-ews\Type
 */
class DirectoryEntryType extends Type
{
    /**
     * An identifier that contains an email address and display name that
     * represents a meeting room.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\EmailAddressType
     */
    public $Id;
}
