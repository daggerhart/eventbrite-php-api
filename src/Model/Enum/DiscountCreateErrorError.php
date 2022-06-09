<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static AMOUNT_AND_PERCENT_OFF_PROVIDED(): string
 * @method static END_DATE_AND_END_DATE_RELATIVE_PROVIDED__CANNOT_PROVIDE_DISCOUNT_END_DATE_AND_DISCOUNT_END_DATE_RELATIVE_AT_THE_SAME_TIME_(): string
 * @method static INVALID(): string
 * @method static MULTI_EVENT_DISCOUNT_NOT_SUPPORTED(): string
 * @method static PUBLIC_DISCOUNT_NOT_SUPPORTED(): string
 * @method static START_DATE_AND_START_DATE_RELATIVE_PROVIDED(): string
 * @method static EXCEED_MAXIMUM_DISCOUNTS_PER_HOLD(): string
 * @method static ARGUMENTS_ERROR(): string
 */
final class DiscountCreateErrorError extends \MyCLabs\Enum\Enum
{
    private const AMOUNT_AND_PERCENT_OFF_PROVIDED = 'AMOUNT_AND_PERCENT_OFF_PROVIDED';
    private const END_DATE_AND_END_DATE_RELATIVE_PROVIDED__CANNOT_PROVIDE_DISCOUNT_END_DATE_AND_DISCOUNT_END_DATE_RELATIVE_AT_THE_SAME_TIME_ = 'END_DATE_AND_END_DATE_RELATIVE_PROVIDED: Cannot provide discount.end_date and discount.end_date_relative at the same time.';
    private const INVALID = 'INVALID';
    private const MULTI_EVENT_DISCOUNT_NOT_SUPPORTED = 'MULTI_EVENT_DISCOUNT_NOT_SUPPORTED';
    private const PUBLIC_DISCOUNT_NOT_SUPPORTED = 'PUBLIC_DISCOUNT_NOT_SUPPORTED';
    private const START_DATE_AND_START_DATE_RELATIVE_PROVIDED = 'START_DATE_AND_START_DATE_RELATIVE_PROVIDED';
    private const EXCEED_MAXIMUM_DISCOUNTS_PER_HOLD = 'EXCEED_MAXIMUM_DISCOUNTS_PER_HOLD';
    private const ARGUMENTS_ERROR = 'ARGUMENTS_ERROR';
}
