<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfTransitionsGroupsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of time zone transition groups.
 *
 * @package php-ews\Array
 */
class ArrayOfTransitionsGroupsType extends ArrayType
{
    /**
     * Represents an array of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfTransitionsType[]
     */
    public $TransitionsGroup = array();
}
