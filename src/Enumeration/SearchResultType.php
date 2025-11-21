<?php
/**
 * Contains \mishanki\PhpEws\Enumeration\SearchResultType.
 */

namespace mishanki\PhpEws\Enumeration;

use \mishanki\PhpEws\Enumeration;

/**
 * Defines the type of search to perform.
 *
 * @package php-ews\Enumeration
 */
class SearchResultType extends Enumeration
{
    /**
     * Return item preview information.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PREVIEW_ONLY = 'PreviewOnly';

    /**
     * Return the search statistics.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const STATISTICS_ONLY = 'StatisticsOnly';
}
