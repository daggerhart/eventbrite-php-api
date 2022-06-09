<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class StructuredContentCreateVideoModule extends \Eventbrite\Model\ModelBase
{
    /**
     * the actual content of a module. This just an example of a video module data.
     *
     * @var \Eventbrite\Model\DataType\CreateStructuredContentVideoModuleData|null
     */
    public ?\Eventbrite\Model\DataType\CreateStructuredContentVideoModuleData $data;

    /**
     * @var 
     */
    public $layout;

    /**
     * @var \Eventbrite\Model\DataType\TimedDisplay|null
     */
    public ?\Eventbrite\Model\DataType\TimedDisplay $timed_display;

    /**
     * purpose the module fulfills.
     *
     * @var string|null
     */
    public ?string $semantic_purpose;

    /**
     * must correlate with data of the module
     *
     * @var string|null
     */
    public ?string $type;

}
