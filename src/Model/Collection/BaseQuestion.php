<?php declare(strict_types=1);

namespace Eventbrite\Model\Collection;

/**
 * Paginated collection for \Eventbrite\Model\DataType\BaseQuestion.
 */
class BaseQuestion extends \Eventbrite\Model\PaginationCollection
{
    /**
     * Collection items.
     *
     * @var \Eventbrite\Model\DataType\BaseQuestion[]
     */
    protected $data = array();

}
