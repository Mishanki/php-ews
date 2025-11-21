<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfFreeBusyResponse.
 */

namespace mishanki\PhpEws\ArrayType;

use \mishanki\PhpEws\ArrayType;

/**
 * Represents the requested users' availability information and the response
 * status.
 *
 * @package php-ews\Array
 */
class ArrayOfFreeBusyResponse extends ArrayType
{
    /**
     * Contains the free/busy information for a single mailbox user and the
     * response status.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\FreeBusyResponseType[]
     */
    public $FreeBusyResponse = array();
}
