<?php
/**
 * Contains \mishanki\PhpEws\Type\UserOofSettings.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Defines the Out of Office (OOF) settings.
 *
 * @package php-ews\Type
 */
class UserOofSettings extends Type
{
    /**
     * Contains the duration for which the OOF status is enabled if the OofState
     * element is set to Scheduled.
     *
     * If the OofState element is set to Enabled or Disabled, the value of this
     * element is ignored.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\Duration
     */
    public $Duration;

    /**
     * Contains a value that determines to whom external OOF messages are sent.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\ExternalAudience
     */
    public $ExternalAudience;

    /**
     * Contains the OOF response sent to addresses outside the recipient's
     * domain or trusted domains.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\ReplyBody
     */
    public $ExternalReply;

    /**
     * Contains the OOF response sent to other users in the user's domain or
     * trusted domain.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\ReplyBody
     */
    public $InternalReply;

    /**
     * Contains the user's OOF state.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\OofState
     */
    public $OofState;
}
