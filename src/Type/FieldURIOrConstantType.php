<?php
/**
 * Contains \mishanki\PhpEws\Type\FieldURIOrConstantType.
 */

namespace mishanki\PhpEws\Type;

/**
 * Represents either a property or a constant value to be used when comparing
 * with another property.
 *
 * @package php-ews\Type
 */
class FieldURIOrConstantType extends SearchExpressionType
{
    /**
     * Identifies a constant value in a restriction.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\ConstantValueType
     */
    public $Constant;
}
