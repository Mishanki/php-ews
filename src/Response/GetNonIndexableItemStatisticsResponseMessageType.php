<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetNonIndexableItemStatisticsResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Defines the response to a GetNonIndexableItemStatistics request.
 *
 * @package php-ews\Response
 */
class GetNonIndexableItemStatisticsResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of statistics for items that could not be indexed.
     *
     * @since Exchange 2013
     *
     * @var \mishanki\PhpEws\ArrayType\ArrayOfNonIndexableItemStatisticsType
     */
    public $NonIndexableItemStatistics;
}
