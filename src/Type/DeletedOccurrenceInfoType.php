<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\DeletedOccurrenceInfoType.
 */

namespace mishanki\PhpEws\Type;

use \mishanki\PhpEws\Type;

/**
 * Represents a deleted occurrence of a recurring calendar item.
 *
 * @package php-ews\Type
 */
class DeletedOccurrenceInfoType extends Type
{
    /**
     * Represents the start time of a deleted occurrence of a recurring calendar
     * item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Start;
}
