<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfPeopleQuerySource.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines the source data for a persona query.
 *
 * @package php-ews\Array
 */
class ArrayOfPeopleQuerySource extends ArrayType
{
    /**
     * Source data for the persona query.
     *
     * @since Exchange 2016
     *
     * @var string[]
     */
    public $Source = array();
}
