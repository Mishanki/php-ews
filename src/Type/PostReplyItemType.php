<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PostReplyItemType.
 */

namespace mishanki\PhpEws\Type;

/**
 * Represents a reply to a post item.
 *
 * @package php-ews\Type
 */
class PostReplyItemType extends PostReplyItemBaseType
{
    /**
     * Represents the new body content of a post item.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\BodyType
     */
    public $NewBodyContent;
}
