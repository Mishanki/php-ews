<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SmartResponseType.
 */

namespace mishanki\PhpEws\Type;

/**
 * Base class for smart responses that include new body content.
 *
 * @package php-ews\Type
 */
class SmartResponseType extends SmartResponseBaseType
{
    /**
     * Represents the actual body content of a message.
     *
     * @since Exchange 2007
     *
     * @var \mishanki\PhpEws\Type\BodyType
     */
    public $NewBodyContent;
}
