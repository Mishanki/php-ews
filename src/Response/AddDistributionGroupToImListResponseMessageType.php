<?php
/**
 * Contains \mishanki\PhpEws\Response\AddDistributionGroupToImListResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines a response to a AddDistributionGroupToImList request.
 *
 * @package php-ews\Response
 */
class AddDistributionGroupToImListResponseMessageType extends ResponseMessageType
{
    /**
     * Represents an instant messaging group.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ImGroupType
     */
    public $ImGroup;
}
