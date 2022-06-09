<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static PUBLIC(): string
 * @method static PASSWORD_REQUIRED(): string
 * @method static INVITATION_REQUIRED(): string
 * @method static LINK_REQUIRED(): string
 */
final class EventPrivacyScheduleResponsePrivacyType extends \MyCLabs\Enum\Enum
{
    private const PUBLIC = 'public';
    private const PASSWORD_REQUIRED = 'password_required';
    private const INVITATION_REQUIRED = 'invitation_required';
    private const LINK_REQUIRED = 'link_required';
}
