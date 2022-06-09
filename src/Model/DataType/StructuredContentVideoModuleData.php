<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class StructuredContentVideoModuleData extends \Eventbrite\Model\ModelBase
{
    /**
     * @var array|null
     */
    public ?array $video;

    /**
     * @var \Eventbrite\Model\DataType\StructuredContentTextModuleData|null
     */
    public ?\Eventbrite\Model\DataType\StructuredContentTextModuleData $caption;

}
