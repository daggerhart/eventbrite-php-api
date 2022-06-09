<?php declare(strict_types=1);

namespace Eventbrite\Model;

class PaginationCollection extends \Eventbrite\Model\CollectionBase
{
    /**
     * @var \Eventbrite\Model\DataType\Pagination
     */
    protected $pagination;

    /**
     * @param \Eventbrite\Model\DataType\Pagination $pagination
     * @param string $collectionType
     * @param array $data
     */
    public function __construct(\Eventbrite\Model\DataType\Pagination $pagination, string $collectionType, array $data = []) {
        $this->setPagination($pagination);
        parent::__construct($collectionType, $data);
    }
    
    /**
     * @return \Eventbrite\Model\DataType\Pagination
     */
    public function getPagination() {
        return $this->pagination;
    }
    
    /**
     * @param \Eventbrite\Model\DataType\Pagination $pagination
     *
     * @return void
     */
    public function setPagination(\Eventbrite\Model\DataType\Pagination $pagination) {
        $this->pagination = $pagination;
    }
    
    /**
     * @param array $response
     * @param string $response_object_key
     * @param string $collectionType
     *
     * @return static
     */
    public static function createFromResponse(array $response, string $response_object_key, string $collectionType) {
        $pagination = \Eventbrite\Model\DataType\Pagination::createFromResponse($response['pagination']);
        $items = $response;
        if ($response_object_key && isset($items[$response_object_key])) {
            $items = $items[$response_object_key];
        }
        $collection = new static($pagination, $collectionType);
        foreach ($items as $item) {
            $collection->add(call_user_func([$collectionType, 'createFromResponse'], $item));
        }
        return $collection;
    }
    
}
