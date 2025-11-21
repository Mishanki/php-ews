<?php
/**
 * Contains \mishanki\PhpEws\Response\FindFolderResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Represents the status and result of a single FindFolder operation request.
 *
 * @package php-ews\Response
 */
class FindFolderResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the results from a search of a single root folder during a
     * FindFolder operation.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\FindFolderParentType
     */
    public $RootFolder;
}
