<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfUnknownEntriesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Contains an array of unknown permission entries that cannot be resolved
 * against the Active Directory directory service.
 *
 * @package php-ews\Array
 */
class ArrayOfUnknownEntriesType extends ArrayType
{
    /**
     * Represents a single unknown permission entry that cannot be resolved
     * against Active Directory.
     *
     * @since Exchange 2007 SP1
     *
     * @var string[]
     */
    public $UnknownEntry = array();
}
