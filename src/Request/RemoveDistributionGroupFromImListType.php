<?php
/**
 * Contains \mishanki\PhpEws\Request\RemoveDistributionGroupFromImListType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Represents a request to remove a specific instant messaging distribution list
 * group.
 *
 * @package php-ews\Request
 */
class RemoveDistributionGroupFromImListType extends BaseRequestType
{
    /**
     * Identifies the distribution group to be removed.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ItemIdType
     */
    public $GroupId;
}
