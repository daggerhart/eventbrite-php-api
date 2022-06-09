<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Organization extends \Eventbrite\Model\ModelBase
{
    /**
     * The organization name
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The organization vertical
     *
     * @var string|null
     */
    public ?string $vertical;

    /**
     * The organization image id
     *
     * @var string|null
     */
    public ?string $image_id;

    /**
     * The organization id
     *
     * @var string|null
     */
    public ?string $id;

}
