<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CropMask extends \Eventbrite\Model\ModelBase
{
    /**
     * Coordinate for top-left corner of crop mask
     *
     * @var \Eventbrite\Model\DataType\CropMaskCoordinate|null
     */
    public ?\Eventbrite\Model\DataType\CropMaskCoordinate $top_left;

    /**
     * Crop mask width
     *
     * @var int|null
     */
    public ?int $width;

    /**
     * Crop mask height
     *
     * @var int|null
     */
    public ?int $height;

}
