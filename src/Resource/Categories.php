<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Categories
 */
class Categories extends \Eventbrite\Model\ResourceBase
{
    /**
     * Category by ID
     *
     * @param string $id
     *   Category ID
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function getCategory(string $id, array $query = array()) : \Eventbrite\Model\ModelBase {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/categories/{$id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Subcategory by ID
     *
     * @param string $subcategory_id
     *   Subcategory ID
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function getSubcategory(string $subcategory_id, array $query = array()) : \Eventbrite\Model\ModelBase {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/subcategories/{$subcategory_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * List of Categories
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Category
     */
    public function getCategories(array $query = array()) : \Eventbrite\Model\Collection\Category {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Category::class;
        $response = $this->request('GET', "/categories/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), 'categories', '\\Eventbrite\\Model\\DataType\\Category']);
    }
    
    /**
     * List of Subcategories
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Subcategory
     */
    public function getSubcategories(array $query = array()) : \Eventbrite\Model\Collection\Subcategory {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Subcategory::class;
        $response = $this->request('GET', "/subcategories/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), 'subcategories', '\\Eventbrite\\Model\\DataType\\Subcategory']);
    }
    
}
