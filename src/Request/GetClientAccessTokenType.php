<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetClientAccessTokenType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Defines a request to get a client access token.
 *
 * @package php-ews\Request
 */
class GetClientAccessTokenType extends BaseRequestType
{
    /**
     * Contains an array of token requests.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\NonEmptyArrayOfClientAccessTokenRequestsType
     */
    public $TokenRequests;
}
