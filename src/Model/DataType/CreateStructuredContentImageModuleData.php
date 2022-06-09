<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CreateStructuredContentImageModuleData extends \Eventbrite\Model\ModelBase
{
    /**
     * @var array|null
     */
    public ?array $image;

    /**
     * @var \Eventbrite\Model\DataType\CreateStructuredContentTextModuleData|null
     */
    public ?\Eventbrite\Model\DataType\CreateStructuredContentTextModuleData $caption;

}
