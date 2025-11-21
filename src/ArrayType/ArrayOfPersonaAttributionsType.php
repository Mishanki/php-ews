<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfPersonaAttributionsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Specifies an array of attribution information for one or more of the contacts
 * or Active Directory recipients aggregated into the associated persona.
 *
 * @package php-ews\Array
 */
class ArrayOfPersonaAttributionsType extends ArrayType
{
    /**
     * Specifies an instance in an array of attributes for a Persona.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\PersonaAttributionType[]
     */
    public $Attribution = array();
}
