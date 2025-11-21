<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfRoomsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents one or more meeting rooms.
 *
 * @package php-ews\Array
 */
class ArrayOfRoomsType extends ArrayType
{
    /**
     * Defines an e-mail address and display name that represents a meeting
     * room.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\RoomType[]
     */
    public $Room = array();
}
