<?php
/**
 * Contains \mishanki\PhpEws\Type\ClientAccessTokenRequestType.
 */

namespace mishanki\PhpEws\Type;

use mishanki\PhpEws\Type;

/**
 * Defines a single token request.
 *
 * @package php-ews\Type
 */
class ClientAccessTokenRequestType extends Type
{
    /**
     * Specifies the identifier of an app.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Id;

    /**
     * Specifies a token scope.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Scope;

    /**
     * Identifies the type of client access token.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\ClientAccessTokenTypeType
     */
    public $TokenType;
}
