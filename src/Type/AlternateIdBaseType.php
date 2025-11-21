<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\AlternateIdBaseType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Base class for alternate id types.
 *
 * @package php-ews\Type
 */
abstract class AlternateIdBaseType extends Type
{
    /**
     * Describes the source or destination format in a request.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\IdFormatType
     */
    public $Format;
}
