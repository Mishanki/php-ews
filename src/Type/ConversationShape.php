<?php
/**
 * Contains \mishanki\PhpEws\Type\ConversationShape.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Identifies the property set to return in a FindConversation operation
 * response.
 *
 * @package php-ews\Type
 */
class ConversationShape extends Type
{
    /**
     * Identifies additional properties for use in the request.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies the set of properties to return in the response.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\DefaultShapeNamesType
     */
    public $BaseShape;
}
