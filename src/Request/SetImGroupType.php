<?php
/**
 * Contains \mishanki\PhpEws\Request\SetImGroupType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Defines a request to change the display name of an instant messaging group.
 *
 * @package php-ews\Request
 */
class SetImGroupType extends BaseRequestType
{
    /**
     * Identifies the instant messaging group to be updated.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ItemIdType
     */
    public $GroupId;

    /**
     * Contains the updated display name of an instant messaging group.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $NewDisplayName;
}
