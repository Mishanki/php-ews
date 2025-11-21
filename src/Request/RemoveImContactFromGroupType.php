<?php
/**
 * Contains \mishanki\PhpEws\Request\RemoveImContactFromGroupType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Defines a request to remove an instant messaging contact from an instant
 * messaging group.
 *
 * @package php-ews\Request
 */
class RemoveImContactFromGroupType extends BaseRequestType
{
    /**
     * Identifies the contact to be removed.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ItemIdType
     */
    public $ContactId;

    /**
     * Identifies the group to remove the contact from.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ItemIdType
     */
    public $GroupId;
}
