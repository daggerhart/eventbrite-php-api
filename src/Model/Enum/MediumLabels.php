<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static EMAIL(): string
 * @method static PUSH_NOTIFICATION(): string
 * @method static SMS(): string
 */
final class MediumLabels extends \MyCLabs\Enum\Enum
{
    private const EMAIL = 'email';
    private const PUSH_NOTIFICATION = 'push_notification';
    private const SMS = 'sms';
}
