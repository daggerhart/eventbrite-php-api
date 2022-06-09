<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static USER(): string
 * @method static EVENT(): string
 */
final class RolePermissionType extends \MyCLabs\Enum\Enum
{
    private const USER = 'user';
    private const EVENT = 'event';
}
