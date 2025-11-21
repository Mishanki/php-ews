<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfEmailAddressesType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Specifies an array of all email addresses of an associated persona.
 *
 * @package php-ews\Array
 */
class ArrayOfEmailAddressesType extends ArrayType
{
    /**
     * Represents a fully resolved e-mail address.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\EmailAddressType[]
     */
    public $Address = array();
}
