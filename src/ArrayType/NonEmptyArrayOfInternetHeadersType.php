<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfInternetHeadersType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents a collection of some of the Internet message headers that are
 * contained in an item in a mailbox.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfInternetHeadersType extends ArrayType
{
    /**
     * Represents the Internet message header for a given header within the
     * headers collection.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\InternetHeaderType[]
     */
    public $InternetMessageHeader = array();
}
