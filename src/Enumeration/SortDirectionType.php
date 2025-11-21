<?php
/**
 * Contains \mishanki\PhpEws\Enumeration\SortDirectionType.
 */

namespace mishanki\PhpEws\Enumeration;

use \mishanki\PhpEws\Enumeration;

/**
 * Identifies a sort order direction.
 *
 * @package php-ews\Enumeration
 */
class SortDirectionType extends Enumeration
{
    /**
     * Items are sorted in ascending order.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ASCENDING = 'Ascending';

    /**
     * Items are sorted in descending order.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DESCENDING = 'Descending';
}
