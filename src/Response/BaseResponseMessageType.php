<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\BaseResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

use \mishanki\PhpEws\Response;

/**
 * Base class for responses.
 *
 * @package php-ews\Response
 */
class BaseResponseMessageType extends Response
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
