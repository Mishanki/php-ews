<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfImGroupType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines an array of instant messaging (IM) groups.
 *
 * @package php-ews\Array
 */
class ArrayOfImGroupType extends ArrayType
{
    /**
     * Represents an instant messaging group.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ImGroupType[]
     */
    public $ImGroup = array();
}
