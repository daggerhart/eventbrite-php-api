<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Pagination extends \Eventbrite\Model\ModelBase
{
    /**
     * The total number of objects across all pages (optional)
     *
     * @var int|null
     */
    public ?int $object_count;

    /**
     * The current page number (starts at 1)
     *
     * @var int|null
     */
    public ?int $page_number;

    /**
     * The number of objects on each page (roughly)
     *
     * @var int|null
     */
    public ?int $page_size;

    /**
     * The total number of pages (starting at 1) (optional)
     *
     * @var int|null
     */
    public ?int $page_count;

    /**
     * A token to return to the server to get the next set of results (see “Continuated Responses” below)
     *
     * @var string|null
     */
    public ?string $continuation;

    /**
     * @var bool|null
     */
    public ?bool $has_more_items;

}
