<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ResourceURIs extends \Eventbrite\Model\ModelBase
{
    /**
     * URL to add a module for the provided page version
     *
     * @var string|null
     */
    public ?string $add_module;

    /**
     * URL to preview a module for the provided page version
     *
     * @var string|null
     */
    public ?string $preview_module;

    /**
     * URL to publish a module for the provided page version
     *
     * @var string|null
     */
    public ?string $publish;

    /**
     * URL to structured content page for the provided page version
     *
     * @var string|null
     */
    public ?string $self;

}
