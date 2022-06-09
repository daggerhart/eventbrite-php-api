<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class StructuredContentImageModuleData extends \Eventbrite\Model\ModelBase
{
    /**
     * @var array|null
     */
    public ?array $image;

    /**
     * @var \Eventbrite\Model\DataType\StructuredContentTextModuleData|null
     */
    public ?\Eventbrite\Model\DataType\StructuredContentTextModuleData $caption;

    /**
     * @var string|null
     */
    public ?string $id;

}
