<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static MALE(): string
 * @method static FEMALE(): string
 */
final class AttendeeProfileGender extends \MyCLabs\Enum\Enum
{
    private const MALE = 'male';
    private const FEMALE = 'female';
}
