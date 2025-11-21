<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\NonEmptyArrayOfClientAccessTokenRequestsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines an array of token requests.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfClientAccessTokenRequestsType extends ArrayType
{
    /**
     * Specifies a single token request.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ClientAccessTokenRequestType[]
     */
    public $TokenRequest = array();
}
