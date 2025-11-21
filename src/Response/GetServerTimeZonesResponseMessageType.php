<?php
/**
 * Contains \mishanki\PhpEws\Response\GetServerTimeZonesResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Represents the status and result of a single GetServerTimeZones operation
 * request.
 *
 * @package php-ews\Response
 */
class GetServerTimeZonesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of time zone definitions.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfTimeZoneDefinitionType
     */
    public $TimeZoneDefinitions;
}
