<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ArtistImageResponse extends \Eventbrite\Model\ModelBase
{
    /**
     * Image id from image_service.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The URL of the image.
     *
     * @var string|null
     */
    public ?string $url;

    /**
     * The type of the image. By default: principal. Extra types might be defined in the future.
     *
     * @var \Eventbrite\Model\Enum\ArtistImageResponseImageType|null
     */
    public ?\Eventbrite\Model\Enum\ArtistImageResponseImageType $image_type;

    /**
     * The width of the image in pixels.
     *
     * @var int|null
     */
    public ?int $width;

    /**
     * The height of the image in pixels.
     *
     * @var int|null
     */
    public ?int $height;

    /**
     * The URL of the thumb image.
     *
     * @var string|null
     */
    public ?string $thumb_url;

    /**
     * The width of the thumb image in pixels.
     *
     * @var int|null
     */
    public ?int $thumb_width;

    /**
     * The height of the thumb image in pixels.
     *
     * @var int|null
     */
    public ?int $thumb_height;

}
