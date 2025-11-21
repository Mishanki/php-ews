<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\DeleteAttachmentType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Represents a request to delete an attachment from the Exchange store.
 *
 * @package php-ews\Request
 */
class DeleteAttachmentType extends BaseRequestType
{
    /**
     * Contains an array of attachment identifiers that are used to delete the
     * attachments.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\ArrayType\NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
