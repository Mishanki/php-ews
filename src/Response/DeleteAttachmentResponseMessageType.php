<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\DeleteAttachmentResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Represents the status and result of a single DeleteAttachment operation
 * request.
 *
 * @package php-ews\Response
 */
class DeleteAttachmentResponseMessageType extends ResponseMessageType
{
    /**
     * Identifies the parent item of a deleted attachment.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\RootItemIdType
     */
    public $RootItemId;
}
