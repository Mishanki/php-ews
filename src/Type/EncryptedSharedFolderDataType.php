<?php
/**
 * Contains \mishanki\PhpEws\Type\EncryptedSharedFolderDataType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents the encrypted data that a client can use to authorize the sharing
 * of its calendar or contact data with other clients.
 *
 * @package php-ews\Type
 */
class EncryptedSharedFolderDataType extends Type
{
    /**
     * Contains encrypted data that represents the shared data.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Determine if we need an EncryptedDataContainerType implementation.
     */
    public $Data;

    /**
     * Contains encrypted data that represents the identification token for the
     * shared data.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Determine if we need an EncryptedDataContainerType implementation.
     */
    public $Token;
}
