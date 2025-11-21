<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetImItemsResponse.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines a response to a GetImItems request.
 *
 * @package php-ews\Response
 */
class GetImItemsResponse extends ResponseMessageType
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
