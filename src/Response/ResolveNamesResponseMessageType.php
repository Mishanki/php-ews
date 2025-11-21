<?php
/**
 * Contains \mishanki\PhpEws\Response\ResolveNamesResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines the status and result of a ResolveNames operation request.
 *
 * @package php-ews\Response
 */
class ResolveNamesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of resolutions for an ambiguous name.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfResolutionType
     */
    public $ResolutionSet;
}
