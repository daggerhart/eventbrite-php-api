<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventbriteImage extends \Eventbrite\Model\DataType\Image
{
    /**
     * The crop mask applied to the original image
     *
     * @var \Eventbrite\Model\DataType\CropMask|null
     */
    public ?\Eventbrite\Model\DataType\CropMask $crop_mask;

    /**
     * The original image
     *
     * @var array|null
     */
    public ?array $original;

    /**
     * The aspect ratio of the cropped image
     *
     * @var string|null
     */
    public ?string $aspect_ratio;

    /**
     * The edge color of the image in hexadecimal representation
     *
     * @var string|null
     */
    public ?string $edge_color;

    /**
     * True if the edge color has been set
     *
     * @var bool|null
     */
    public ?bool $edge_color_set;

}
