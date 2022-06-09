<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class BookmarkInfo extends \Eventbrite\Model\ModelBase
{
    /**
     * User saved the event or not.
     *
     * @var bool|null
     */
    public ?bool $bookmarked;

}
