<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfMailTipsResponseMessageType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents a list of mail tips response messages.
 *
 * @package php-ews\Array
 */
class ArrayOfMailTipsResponseMessageType extends ArrayType
{
    /**
     * Represents mail tips settings.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Response\MailTipsResponseMessageType[]
     */
    public $MailTipsResponseMessageType = array();
}
