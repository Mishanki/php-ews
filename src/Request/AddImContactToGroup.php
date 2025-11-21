<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\AddImContactToGroup.
 */

namespace mishanki\PhpEws\Request;

/**
 * Defines a request to add an existing instant messaging contact to an instant
 * messaging group.
 *
 * @package php-ews\Request
 */
class AddImContactToGroup extends BaseRequestType
{
    /**
     * Uniquely identifies a contact.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ItemIdType
     */
    public $ContactId;

    /**
     * Uniquely identifies a group.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ItemIdType
     */
    public $GroupId;
}
