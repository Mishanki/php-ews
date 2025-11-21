<?php
/**
 * Contains \mishanki\PhpEws\Type\FreeBusyViewOptionsType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents the type of free/busy information returned in a response.
 *
 * @package php-ews\Type
 */
class FreeBusyViewOptionsType extends Type
{
    /**
     * Represents the time difference between two successive slots in the
     * FreeBusyMerged view.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MergedFreeBusyIntervalInMinutes;

    /**
     * Defines the type of calendar information that a client requests.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \mishanki\PhpEws\Enumeration\FreeBusyViewType
     */
    public $RequestedView;

    /**
     * Identifies the time span queried for the user availability information.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\Duration
     */
    public $TimeWindow;
}
