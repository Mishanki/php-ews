<?php
/**
 * Contains \mishanki\PhpEws\Request\RefreshSharingFolderType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Defines a request to refresh the specified local folder.
 *
 * @package php-ews\Request
 */
class RefreshSharingFolderType extends BaseRequestType
{
    /**
     * Represents the identifier of the local folder in a sharing relationship.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\FolderIdType
     */
    public $SharingFolderId;
}
