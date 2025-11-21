<?php
/**
 * Contains \mishanki\PhpEws\Request\FindItemType.
 */

namespace mishanki\PhpEws\Request;

/**
 * Defines a request to find items in a mailbox.
 *
 * @package php-ews\Request
 */
class FindItemType extends BaseRequestType
{
    /**
     * Provides time span limits to define a search for calendar items.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\CalendarViewType
     */
    public $CalendarView;

    /**
     * Defines a search for contact items based on alphabetical display names.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\ContactsViewType
     */
    public $ContactsView;

    /**
     * Provides standard groupings for FindItem queries.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\DistinguishedGroupByType
     */
    public $DistinguishedGroupBy;

    /**
     * Describes where the paged view starts and the maximum number of items
     * returned in a FindItem request.
     *
     * The paged view offset from the beginning of the set of found items is
     * described by a fraction.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\FractionalPageViewType
     */
    public $FractionalPageItemView;

    /**
     * Specifies arbitrary groupings for FindItem queries.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\GroupByType
     */
    public $GroupBy;

    /**
     * Describes how paged item information is returned for a FindItem request.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\IndexedPageViewType
     */
    public $IndexedPageItemView;

    /**
     * Identifies the item properties and content to include in a FindItem
     * operation response.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\ItemResponseShapeType
     */
    public $ItemShape;

    /**
     * Identifies folders to search for the FindItem and FindFolder operations.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType
     */
    public $ParentFolderIds;

    /**
     * Contains a mailbox query string based on Advanced Query Syntax (AQS).
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\QueryStringType
     */
    public $QueryString;

    /**
     * Defines the restriction or query that is used to filter items or folders
     * in FindItem/FindFolder and search folder operations.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\RestrictionType
     */
    public $Restriction;

    /**
     * Defines how items are sorted in a FindItem request.
     *
     * This element is optional.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\ArrayType\NonEmptyArrayOfFieldOrdersType
     */
    public $SortOrder;

    /**
     * Defines whether the search finds items in folders or the folders'
     * dumpsters.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\ItemQueryTraversalType
     */
    public $Traversal;
}
