<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Order
 */
class Orders extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve Order by ID
     *
     * @param string $order_id
     *   Order ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Order|\Eventbrite\Model\DataType\Error
     */
    public function getOrder(string $order_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Order::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/orders/{$order_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * List Orders by Organization ID
     *
     * @param string $organization_id
     *   Organization ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Order
     */
    public function getOrganizationOrders(string $organization_id, array $query = array()) : \Eventbrite\Model\Collection\Order {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Order::class;
        $response = $this->request('GET', "/organizations/{$organization_id}/orders/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'orders', '\\Eventbrite\\Model\\DataType\\Order']);
    }
    
    /**
     * List Orders by Event ID
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Order
     */
    public function getEventOrders(string $event_id, array $query = array()) : \Eventbrite\Model\Collection\Order {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Order::class;
        $response = $this->request('GET', "/events/{$event_id}/orders/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'orders', '\\Eventbrite\\Model\\DataType\\Order']);
    }
    
    /**
     * List Orders by User ID
     *
     * @param string $user_id
     *   User ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Order
     */
    public function getUserOrders(string $user_id, array $query = array()) : \Eventbrite\Model\Collection\Order {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Order::class;
        $response = $this->request('GET', "/users/{$user_id}/orders/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'orders', '\\Eventbrite\\Model\\DataType\\Order']);
    }
    
}
