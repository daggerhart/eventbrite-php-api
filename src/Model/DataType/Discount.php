<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Discount extends \Eventbrite\Model\DataType\DiscountBase
{
    /**
     * Discount ID
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Number of discounts used during ticket sales
     *
     * @var int|null
     */
    public ?int $quantity_sold;

}
