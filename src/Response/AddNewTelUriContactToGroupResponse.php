<?php
/**
 * Contains \mishanki\PhpEws\Response\AddNewTelUriContactToGroupResponse.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines the result data for a AddNewTelUriContactToGroup request.
 *
 * @package php-ews\Response
 */
class AddNewTelUriContactToGroupResponse extends ResponseMessageType
{
    /**
     * Specifies a set of persona data returned by a
     * AddNewTelUriContactToGroupType request.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\PersonaType
     */
    public $Persona;
}
