<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfExtendedAttributesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Internal use only.
 *
 * @package php-ews\Array
 */
class ArrayOfExtendedAttributesType extends ArrayType
{
    /**
     * Internal use only.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ExtendedAttributeType[]
     */
    public $ExtendedAttribute = array();
}
