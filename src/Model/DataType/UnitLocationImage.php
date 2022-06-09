<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class UnitLocationImage extends \Eventbrite\Model\ModelBase
{
    /**
     * fully qualified url of the seat map image. Currently all seat map images are in 660x660 .png format. This value can never be null.
     *
     * @var string|null
     */
    public ?string $url;

    /**
     * x coordinate of this seat's location within this seat map measured in % from the left edge of seat map. The value ranges from 0.0 between 100.0. This value can never be null.
     *
     * @var int|null
     */
    public ?int $x;

    /**
     * y coordinate of this seat's location within this seat map measured in % from the top edge of seat map. The value ranges from 0.0 between 100.0. This value can never be null.
     *
     * @var int|null
     */
    public ?int $y;

}
