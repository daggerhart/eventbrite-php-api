<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Continuation extends \Eventbrite\Model\ModelBase
{
    /**
     * Link to the next page
     *
     * @var string|null
     */
    public ?string $continuation;

    /**
     * Is there another page of results
     *
     * @var bool|null
     */
    public ?bool $has_more_items;

}
