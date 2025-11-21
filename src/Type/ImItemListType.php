<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ImItemListType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Defines a list of instant messaging groups and instant messaging contacts.
 *
 * @package php-ews\Type
 */
class ImItemListType extends Type
{
    /**
     * Represents an array of instant messaging (IM) groups.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfImGroupType
     */
    public $Groups;

    /**
     * Specifies an array of personas.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfPeopleType
     */
    public $Personas;
}
