<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\PerformReminderActionResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines the response to a PerformReminderAction request.
 *
 * @package php-ews\Response
 */
class PerformReminderActionResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the identifiers of updated reminder items.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\NonEmptyArrayOfItemIdsType
     */
    public $UpdatedItemIds;
}
