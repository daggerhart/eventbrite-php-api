<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class StructuredContentImageModule extends \Eventbrite\Model\ModelBase
{
    /**
     * @var string|null
     */
    public ?string $id;

    /**
     * the actual content of a module.  This is an example of an image module data.
     *
     * @var \Eventbrite\Model\DataType\StructuredContentImageModuleData|null
     */
    public ?\Eventbrite\Model\DataType\StructuredContentImageModuleData $data;

    /**
     * @var 
     */
    public $layout;

    /**
     * If this is included, then that means module is viewable only between/after certain date time. Only used with the Digital Content feature - not currently available for Event Description.
     *
     * @var \Eventbrite\Model\DataType\TimedDisplay|null
     */
    public ?\Eventbrite\Model\DataType\TimedDisplay $timed_display;

    /**
     * @var array|null
     */
    public ?array $resource_uris;

    /**
     * purpose the module fulfills.
     *
     * @var string|null
     */
    public ?string $semantic_purpose;

    /**
     * @var string|null
     */
    public ?string $type;

}
