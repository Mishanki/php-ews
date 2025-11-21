<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfBinaryType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents a value that encodes a contact's certificate.
 *
 * @package php-ews\Type
 */
class ArrayOfBinaryType extends ArrayType
{
    /**
     * Contains a Base64-encoded value.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $Base64Binary;
}
