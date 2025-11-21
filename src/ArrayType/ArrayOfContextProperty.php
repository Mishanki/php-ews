<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfContextProperty.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines a set of context properties for an item.
 *
 * @package php-ews\Array
 */
class ArrayOfContextProperty extends ArrayType
{
    /**
     * Specifies the context of an item.
     *
     * @since Exchange 2016
     *
     * @var \mishanki\PhpEws\Type\ContextPropertyType[]
     */
    public $ContextProperty = array();
}
