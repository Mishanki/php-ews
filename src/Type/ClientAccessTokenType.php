<?php
/**
 * Contains \mishanki\PhpEws\Type\ClientAccessTokenType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Defines a client access token.
 *
 * @package php-ews\Type
 */
class ClientAccessTokenType extends Type
{
    /**
     * Specifies the identifier of the token.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Id;

    /**
     * Specifies the type of token.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\ClientAccessTokenTypeType
     */
    public $TokenType;

    /**
     * Specifies the encoded client access token.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $TokenValue;

    /**
     * Specifies the time, in minutes, that the token is valid.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $TTL;
}
