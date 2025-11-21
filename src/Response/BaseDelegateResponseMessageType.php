<?php
/**
 * Contains \mishanki\PhpEws\Response\BaseDelegateResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Base class for delegate response messages.
 *
 * @package php-ews\Response
 */
abstract class BaseDelegateResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the response messages for an Exchange Web Services delegate
     * management request.
     *
     * @since Exchange 2007 SP1
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
}
