<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfUploadItemsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of items to upload into a mailbox.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfUploadItemsType extends ArrayType
{
    /**
     * Represents a single item to upload into a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var \mishanki\PhpEws\Type\UploadItemType[]
     */
    public $Item = array();
}
