<?php declare(strict_types=1);

namespace Eventbrite\Model\Collection;

/**
 * Paginated collection for \Eventbrite\Model\DataType\CannedQuestion.
 */
class CannedQuestion extends \Eventbrite\Model\PaginationCollection
{
    /**
     * Collection items.
     *
     * @var \Eventbrite\Model\DataType\CannedQuestion[]
     */
    protected $data = array();

}
