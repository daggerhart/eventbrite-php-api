<?php declare(strict_types=1);

namespace Eventbrite\Model\Collection;

/**
 * Paginated collection for \Eventbrite\Model\DataType\Role.
 */
class Role extends \Eventbrite\Model\PaginationCollection
{
    /**
     * Collection items.
     *
     * @var \Eventbrite\Model\DataType\Role[]
     */
    protected $data = array();

}
