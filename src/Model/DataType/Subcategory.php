<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Subcategory extends \Eventbrite\Model\ModelBase
{
    /**
     * Subcategory ID
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * @var string|null
     */
    public ?string $resource_uri;

    /**
     * Subcategory name
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Category this subcategory belongs to
     *
     * @var \Eventbrite\Model\DataType\Category|null
     */
    public ?\Eventbrite\Model\DataType\Category $parent_category;

}
