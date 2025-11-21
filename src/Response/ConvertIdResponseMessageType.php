<?php
/**
 * Contains \mishanki\PhpEws\Response\ConvertIdResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Represents the status and result of a ConvertId operation request.
 *
 * @package php-ews\Response
 */
class ConvertIdResponseMessageType extends ResponseMessageType
{
    /**
     * Describes a converted identifier in the response.
     *
     * @since Exchange 2007 SP1
     *
     * @var \mishanki\PhpEws\Type\AlternateIdType
     */
    public $AlternateId;
}
