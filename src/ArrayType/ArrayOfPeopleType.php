<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfPeopleType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines an array of persona data.
 *
 * @package php-ews\Array
 */
class ArrayOfPeopleType extends ArrayType
{
    /**
     * Specifies a set of persona data.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\PersonaType[]
     */
    public $Persona = array();
}
