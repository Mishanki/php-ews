<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonIndexableItemDetailResultType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Defines the results of the GetNonIndexableItemDetails request.
 *
 * @package php-ews\Type
 */
class NonIndexableItemDetailResultType extends Type
{
    /**
     * Specifies an array of mailboxes that failed on search.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfFailedSearchMailboxesType
     */
    public $FailedMailboxes;

    /**
     * Contains an array of item details for non-indexable items.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfNonIndexableItemDetailsType
     */
    public $Items;
}
