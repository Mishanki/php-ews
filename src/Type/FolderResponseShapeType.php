<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FolderResponseShapeType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Defines the folder properties to include in a GetFolder, FindFolder, or
 * SyncFolderHierarchy response.
 *
 * @package php-ews\Type
 *
 * @todo Create a common ResponseShapeType.
 */
class FolderResponseShapeType extends Type
{
    /**
     * Identifies additional properties to return in a response.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies the basic configuration of properties to return in a response.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType
     */
    public $BaseShape;
}
