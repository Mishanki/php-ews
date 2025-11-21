<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ChangeDescriptionType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Base class for changes to individual properties.
 *
 * @package php-ews\Type
 */
abstract class ChangeDescriptionType extends Type
{
    /**
     * Identifies extended MAPI properties to set.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
