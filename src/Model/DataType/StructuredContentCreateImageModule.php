<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class StructuredContentCreateImageModule extends \Eventbrite\Model\ModelBase
{
    /**
     * the actual content of a module. This just an example of a image module data.
     *
     * @var \Eventbrite\Model\DataType\CreateStructuredContentImageModuleData|null
     */
    public ?\Eventbrite\Model\DataType\CreateStructuredContentImageModuleData $data;

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
     * Must correlate with the data of the module.
     *
     * @var string|null
     */
    public ?string $type;

}
