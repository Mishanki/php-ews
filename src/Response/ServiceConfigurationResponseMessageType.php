<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\ServiceConfigurationResponseMessageType.
 */

namespace mishanki\PhpEws\Response;

/**
 * Represents service configuration settings.
 *
 * @package php-ews\Response
 */
class ServiceConfigurationResponseMessageType extends ResponseMessageType
{
    /**
     * Contains service configuration information for the mail tips service.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\MailTipsServiceConfiguration
     */
    public $MailTipsConfiguration;

    /**
     * Contains service configuration information for the protection rules
     * service.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\ProtectionRulesServiceConfiguration
     */
    public $ProtectionRulesConfiguration;

    /**
     * Contains service configuration information for the Unified Messaging
     * service.
     *
     * @since Exchange 2010
     *
     * @var \mishanki\PhpEws\Type\UnifiedMessageServiceConfiguration
     */
    public $UnifiedMessagingConfiguration;
}
