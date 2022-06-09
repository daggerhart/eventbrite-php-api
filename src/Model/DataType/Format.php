<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Format extends \Eventbrite\Model\ModelBase
{
    /**
     * Format ID
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Format name
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Localized format name
     *
     * @var string|null
     */
    public ?string $name_localized;

    /**
     * Short name for a format
     *
     * @var string|null
     */
    public ?string $short_name;

    /**
     * Localized short name for a format
     *
     * @var string|null
     */
    public ?string $short_name_localized;

    /**
     * Is an absolute URL to the API endpoint that will return you the canonical representation of the format.
     *
     * @var string|null
     */
    public ?string $resource_uri;

}
