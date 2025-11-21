<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetRemindersResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Represents the response to a GetReminders request.
 *
 * @package php-ews\Response
 */
class GetRemindersResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the reminders returned in the response.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfRemindersType
     */
    public $Reminders;
}
