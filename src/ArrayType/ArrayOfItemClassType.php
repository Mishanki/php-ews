<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfItemClassType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents a list of item classes.
 *
 * @package php-ews\Array
 */
class ArrayOfItemClassType extends ArrayType
{
    /**
     * Represents the message class of an item.
     *
     * @since Exchange 2010 SP1
     *
     * @var string[]
     *
     * @see \mishanki\PhpEws\Enumeration\ItemClassType[]
     */
    public $ItemClass = array();
}
