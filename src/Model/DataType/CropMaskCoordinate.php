<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CropMaskCoordinate extends \Eventbrite\Model\ModelBase
{
    /**
     * Y coordinate for top-left corner of crop mask
     *
     * @var int|null
     */
    public ?int $y;

    /**
     * X coordinate for top-left corner of crop mask
     *
     * @var int|null
     */
    public ?int $x;

}
