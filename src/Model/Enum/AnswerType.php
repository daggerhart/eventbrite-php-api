<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static TEXT(): string
 * @method static URL(): string
 * @method static EMAIL(): string
 * @method static DATE(): string
 * @method static NUMBER(): string
 * @method static ADDRESS(): string
 * @method static DROPDOWN(): string
 */
final class AnswerType extends \MyCLabs\Enum\Enum
{
    private const TEXT = 'text';
    private const URL = 'url';
    private const EMAIL = 'email';
    private const DATE = 'date';
    private const NUMBER = 'number';
    private const ADDRESS = 'address';
    private const DROPDOWN = 'dropdown';
}
