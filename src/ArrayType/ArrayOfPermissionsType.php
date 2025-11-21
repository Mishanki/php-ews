<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfPermissionsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Contains the collection of permissions for a folder.
 *
 * @package php-ews\Array
 */
class ArrayOfPermissionsType extends ArrayType
{
    /**
     * Defines the access that a delegate has to a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var \mishanki\PhpEws\Type\PermissionType[]
     */
    public $Permission = array();
}
