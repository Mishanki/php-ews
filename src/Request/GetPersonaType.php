<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetPersonaType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Defines a request to get a persona.
 *
 * @package php-ews\Request
 */
class GetPersonaType extends BaseRequestType
{
    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var \mishanki\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     *
     * @todo Update once documentation exists.
     */
    public $AdditionalProperties;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var \mishanki\PhpEws\Type\EmailAddressType
     *
     * @todo Update once documentation exists.
     */
    public $EmailAddress;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var string
     *
     * @todo Update once documentation exists.
     */
    public $ItemLinkId;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var \mishanki\PhpEws\Type\TargetFolderIdType
     *
     * @todo Update once documentation exists.
     */
    public $ParentFolderId;

    /**
     * Specifies the persona identifier for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\Type\ItemIdType
     */
    public $PersonaId;
}
