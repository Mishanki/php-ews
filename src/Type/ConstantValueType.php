<?php
/**
 * Contains \mishanki\PhpEws\Type\ConstantValueType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Identifies a constant value in a restriction.
 *
 * @package php-ews\Type
 */
class ConstantValueType extends Type
{
    /**
     * Specifies the value to compare in the restriction.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Value;
}
