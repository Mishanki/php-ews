<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfSearchItemKindsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of messages to search.
 *
 * @package php-ews\Array
 */
class ArrayOfSearchItemKindsType extends ArrayType
{
    /**
     * Indicates an item type to be searched.
     *
     * @since Exchange 2013
     *
     * @var string[]
     *
     * @see \mishanki\PhpEws\Enumeration\SearchItemKindType[]
     */
    public $SearchItemKind = array();
}
