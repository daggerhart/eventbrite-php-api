<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class StructuredContentCreateTextModule extends \Eventbrite\Model\ModelBase
{
    /**
     * the actual content of a module. This just an example of a text module data. For more examples, please refer to the [event description tutorial](https://www.eventbrite.com/platform/docs/event-description).
     *
     * @var \Eventbrite\Model\DataType\CreateStructuredContentTextModuleData|null
     */
    public ?\Eventbrite\Model\DataType\CreateStructuredContentTextModuleData $data;

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
