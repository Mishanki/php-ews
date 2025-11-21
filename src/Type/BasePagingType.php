<?php
/**
 * Contains \mishanki\PhpEws\Type\BasePagingType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Base class for defining how results should be paged.
 *
 * @package php-ews\Type
 */
abstract class BasePagingType extends Type
{
    /**
     * Describes the maximum number of items or conversations to return in the
     * response.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MaxEntriesReturned;
}
