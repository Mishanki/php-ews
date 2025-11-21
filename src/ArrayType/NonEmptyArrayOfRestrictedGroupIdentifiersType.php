<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfRestrictedGroupIdentifiersType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents a collection of restricted groups from a user's token.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfRestrictedGroupIdentifiersType extends ArrayType
{
    /**
     * Represents the group security identifier (SID) and attributes for a
     * restricted group.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\SidAndAttributesType[]
     */
    public $RestrictedGroupIdentifier = array();
}
