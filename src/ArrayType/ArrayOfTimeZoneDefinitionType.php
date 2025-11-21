<?php
/**
 * Contains \mishanki\PhpEws\ArrayType\ArrayOfTimeZoneDefinitionType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of time zone definitions.
 *
 * @package php-ews\Array
 */
class ArrayOfTimeZoneDefinitionType extends ArrayType
{
    /**
     * Specifies the periods and transitions that define a time zone.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\TimeZoneDefinitionType[]
     */
    public $TimeZoneDefinition = array();
}
