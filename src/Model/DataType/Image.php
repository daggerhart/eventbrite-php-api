<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Image extends \Eventbrite\Model\ModelBase
{
    /**
     * The image’s ID
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The URL of the image
     *
     * @var string|null
     */
    public ?string $url;

}
