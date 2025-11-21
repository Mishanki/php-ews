<?php
/**
 * Contains \mishanki\PhpEws\Type\TransitionTargetType.
 */

namespace mishanki\PhpEws\Type;

/**
 * Specifies the target of the time zone transition.
 *
 * The target is either a time zone period or a group of time zone transitions.
 *
 * @package php-ews\Type
 */
class TransitionTargetType extends StringType
{
    /**
     * Indicates whether the time zone transition target is a time zone period
     * or of a group of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\TransitionTargetKindType
     */
    public $Kind;
}
