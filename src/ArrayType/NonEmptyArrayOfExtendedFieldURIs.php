<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfExtendedFieldURIs.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines the extended properties used for a request.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfExtendedFieldURIs extends ArrayType
{
    /**
     * Specifies an extended property for the Unified Contact Store.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\PathToExtendedFieldType[]
     */
    public $ExtendedProperty = array();
}
