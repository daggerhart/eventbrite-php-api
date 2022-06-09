<?php declare(strict_types=1);

namespace Eventbrite\Model\Collection;

/**
 * Paginated collection for \Eventbrite\Model\DataType\FeeRate.
 */
class FeeRate extends \Eventbrite\Model\PaginationCollection
{
    /**
     * Collection items.
     *
     * @var \Eventbrite\Model\DataType\FeeRate[]
     */
    protected $data = array();

}
