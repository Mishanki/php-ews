<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfGroupIdentifiersType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents a collection of Active Directory directory service group object
 * security identifiers.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfGroupIdentifiersType extends ArrayType
{
    /**
     * Represents a single security identifier and attribute for an Active
     * Directory object group of which the account is a member.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\SidAndAttributesType[]
     */
    public $GroupIdentifier = array();
}
