<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfServiceConfigurationResponseMessageType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents an array of service configuration response messages.
 *
 * @package php-ews\Array
 */
class ArrayOfServiceConfigurationResponseMessageType extends ArrayType
{
    /**
     * Contains service configuration settings.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Response\ServiceConfigurationResponseMessageType[]
     */
    public $ServiceConfigurationResponseMessageType = array();
}
