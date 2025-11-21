<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\UploadItemsResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * the status and results of a request to upload a single mailbox item.
 *
 * @package php-ews\Response
 */
class UploadItemsResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the item identifier of an uploaded item.
     *
     * @since Exchange 2010 SP1
     *
     * @var \mishanki\PhpEws\Type\ItemIdType
     */
    public $ItemId;
}
