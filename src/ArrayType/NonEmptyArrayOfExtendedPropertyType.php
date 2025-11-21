<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfExtendedPropertyType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * An array of additional properties.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfExtendedPropertyType extends ArrayType
{
    /**
     * Identifies extended MAPI properties on folders and items.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ExtendedPropertyType[]
     */
    public $ExtendedProperty = array();
}
