<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfDiscoverySearchConfigurationType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines an array of DiscoverySearchConfiguration elements.
 *
 * @package php-ews\Array
 */
class ArrayOfDiscoverySearchConfigurationType extends ArrayType
{
    /**
     * Specifies the configuration for eDiscovery search.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\DiscoverySearchConfigurationType[]
     */
    public $DiscoverySearchConfiguration = array();
}
