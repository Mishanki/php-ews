<?php
/**
 * Contains \mishanki\PhpEws\Response\GetClientAccessTokenResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines a response message for a GetClientAccessToken request.
 *
 * @package php-ews\Response
 */
class GetClientAccessTokenResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies a client access token.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ClientAccessTokenType
     */
    public $Token;
}
