<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class DiscountCreateError extends \Eventbrite\Model\DataType\Error
{
    /**
     * @var \Eventbrite\Model\Enum\DiscountCreateErrorError|null
     */
    public ?\Eventbrite\Model\Enum\DiscountCreateErrorError $error;

}
