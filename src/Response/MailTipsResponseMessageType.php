<?php
/**
 * Contains \mishanki\PhpEws\Response\MailTipsResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Represents mail tips settings.
 *
 * @package php-ews\Response
 */
class MailTipsResponseMessageType extends ResponseMessageType
{
    /**
     * Represents values for various types of mail tips.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\MailTips
     */
    public $MailTips;
}
