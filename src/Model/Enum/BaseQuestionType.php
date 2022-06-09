<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static CHECKBOX(): string
 * @method static DROPDOWN(): string
 * @method static TEXT(): string
 * @method static PARAGRAPH(): string
 * @method static RADIO(): string
 * @method static WAIVER(): string
 */
final class BaseQuestionType extends \MyCLabs\Enum\Enum
{
    private const CHECKBOX = 'checkbox';
    private const DROPDOWN = 'dropdown';
    private const TEXT = 'text';
    private const PARAGRAPH = 'paragraph';
    private const RADIO = 'radio';
    private const WAIVER = 'waiver';
}
