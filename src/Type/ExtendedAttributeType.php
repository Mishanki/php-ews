<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ExtendedAttributeType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Internal use only.
 *
 * @package php-ews\Type
 */
class ExtendedAttributeType extends Type
{
    /**
     * Internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Name;

    /**
     * Internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Value;
}
