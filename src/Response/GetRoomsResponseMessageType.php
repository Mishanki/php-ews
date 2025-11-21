<?php
/**
 * Contains \mishanki\PhpEws\Response\GetRoomsResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Represents the response to a GetRooms operation request.
 *
 * @package php-ews\Response
 */
class GetRoomsResponseMessageType extends ResponseMessageType
{
    /**
     * Provides a list of email addresses and display names that represent
     * meeting rooms.
     *
     * @since Exchange 2010 SP1
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfRoomsType
     */
    public $Rooms;
}
