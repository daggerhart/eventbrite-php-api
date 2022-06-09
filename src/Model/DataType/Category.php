<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Category extends \Eventbrite\Model\ModelBase
{
    /**
     * Category ID
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * @var string|null
     */
    public ?string $resource_uri;

    /**
     * Category name
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Translated category name
     *
     * @var string|null
     */
    public ?string $name_localized;

    /**
     * Shorter category name for display in sidebars and other small spaces
     *
     * @var string|null
     */
    public ?string $short_name;

    /**
     * Translated short category name
     *
     * @var string|null
     */
    public ?string $short_name_localized;

    /**
     * List of subcategories (only shown on some endpoints)
     *
     * @var array|null
     */
    public ?array $subcategories;

}
