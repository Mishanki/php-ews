<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfAppsType.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Defines information about all the XML manifest files for apps installed in a
 * mailbox.
 *
 * @package php-ews\Array
 */
class ArrayOfAppsType extends ArrayType
{
    /**
     * Contains information about an XML manifest file for a mail app that is
     * installed in a mailbox.
     *
     * @since Exchange 2013 SP1
     *
     * @var \mishanki\PhpEws\Type\AppType[]
     */
    public $App = array();
}
