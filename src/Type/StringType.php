<?php
/**
 * Contains \mishanki\PhpEws\Type\StringType;
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Base class for string types.
 *
 * @package php-ews\Type
 */
abstract class StringType extends Type
{
    /**
     * Value of the element.
     *
     * @var string
     */
    public $_;
}
