<?php
/**
 * Contains \mishanki\PhpEws\Type\OutOfOfficeMailTip.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents the response message and a duration time for sending the response
 * message.
 *
 * @package php-ews\Type
 */
class OutOfOfficeMailTip extends Type
{
    /**
     * Contains the duration that the OOF status is enabled if the OofState
     * element is set to Scheduled.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\Duration
     */
    public $Duration;

    /**
     * Contains an Out of Office (OOF) message and the language used for the
     * message.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\ReplyBody
     */
    public $ReplyBody;
}
