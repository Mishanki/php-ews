<?php
/**
 * Contains \mishanki\PhpEws\Response\ItemInfoResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Represents the status and result of a single item operation request.
 *
 * @package php-ews\Response
 */
class ItemInfoResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of created items.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfRealItemsType
     */
    public $Items;
}
