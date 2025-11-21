<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfRequestAttachmentIdsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of attachment identifiers.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfRequestAttachmentIdsType extends ArrayType
{
    /**
     * The element that identifies a single attachment.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\RequestAttachmentIdType[]
     */
    public $AttachmentId = array();
}
