<?php
/**
 * Contains \mishanki\PhpEws\Response\GetImItemListResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines a response to a GetImItemList request.
 *
 * @package php-ews\Response
 */
class GetImItemListResponseMessageType extends ResponseMessageType
{
    /**
     * Contains a list of instant messaging groups and instant messaging
     * contacts.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ImItemListType
     */
    public $ImItemList;
}
