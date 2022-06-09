<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static GLOBAL(): string
 * @method static EVENT(): string
 * @method static USER(): string
 */
final class GrantEntityType extends \MyCLabs\Enum\Enum
{
    private const GLOBAL = 'global';
    private const EVENT = 'event';
    private const USER = 'user';
}
