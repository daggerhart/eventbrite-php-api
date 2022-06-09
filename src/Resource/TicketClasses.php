<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Ticket Class
 */
class TicketClasses extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve a Ticket Class
     *
     * @param string $event_id
     *   Event ID.
     * @param string $ticket_class_id
     *   Ticket Class ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\TicketClass|\Eventbrite\Model\DataType\Error
     */
    public function getEventTicketClass(string $event_id, string $ticket_class_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\TicketClass::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/events/{$event_id}/ticket_classes/{$ticket_class_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Create a Ticket Class
     *
     * @param string $event_id
     *   Event ID
     * @param string $ticket_class_id
     *   Ticket Class ID
     * @param \Eventbrite\Model\DataType\TicketClassCreate $ticket_class
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\TicketClassResponse|\Eventbrite\Model\DataType\Error
     */
    public function createEventTicketClass(string $event_id, string $ticket_class_id, ?\Eventbrite\Model\DataType\TicketClassCreate $ticket_class = null, array $query = array()) {
        $query['ticket_class'] = $ticket_class;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\TicketClassResponse::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/ticket_classes/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Update a Ticket Class
     *
     * @param string $event_id
     *   Event ID.
     * @param string $ticket_class_id
     *   Ticket Class ID.
     * @param \Eventbrite\Model\DataType\TicketClassUpdate $ticket_class
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\TicketClass|\Eventbrite\Model\DataType\Error
     */
    public function updateEventTicketClass(string $event_id, string $ticket_class_id, ?\Eventbrite\Model\DataType\TicketClassUpdate $ticket_class = null, array $query = array()) {
        $query['ticket_class'] = $ticket_class;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\TicketClass::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/ticket_classes/{$ticket_class_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * List Ticket Classes by Event
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\PaginationCollection
     */
    public function getEventTicketClasses(string $event_id, array $query = array()) : \Eventbrite\Model\PaginationCollection {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\PaginationCollection::class;
        $response = $this->request('GET', "/events/{$event_id}/ticket_classes/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'ticket_classes', '\\Eventbrite\\Model\\DataType\\TicketClass']);
    }
    
    /**
     * List Ticket Classes Available For Sale by Event
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\TicketClassForSaleResponse|\Eventbrite\Model\DataType\Error
     */
    public function getEventTicketClassesForSale(string $event_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\TicketClassForSaleResponse::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/events/{$event_id}/ticket_classes/for_sale/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'ticket_classes', '\\Eventbrite\\Model\\DataType\\TicketClassForSaleResponse']);
    }
    
}
