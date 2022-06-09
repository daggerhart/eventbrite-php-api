<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static EMBEDDED_CHECKOUT(): string
 * @method static EMAIL_CAMPAIGNS(): string
 * @method static LINK_EVENT_TO_FACEBOOK(): string
 * @method static TONEDEN_INTEGRATION(): string
 */
final class ProductFeature extends \MyCLabs\Enum\Enum
{
    private const EMBEDDED_CHECKOUT = 'embedded_checkout';
    private const EMAIL_CAMPAIGNS = 'email_campaigns';
    private const LINK_EVENT_TO_FACEBOOK = 'link_event_to_facebook';
    private const TONEDEN_INTEGRATION = 'toneden_integration';
}
