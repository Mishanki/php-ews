<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\MembersListType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents the list of members for a distribution list.
 *
 * @package php-ews\Type
 */
class MembersListType extends Type
{
    /**
     * Provides an identifier for a fully resolved e-mail address, and the
     * status of that address on the server.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\MemberType[]
     */
    public $Member = array();
}
