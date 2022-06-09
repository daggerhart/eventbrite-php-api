<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Ticket Group
 */
class TicketGroups extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve a Ticket Group
     *
     * @param string $ticket_group_id
     *   Ticket Group ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\TicketGroup
     */
    public function getTicketGroup(string $ticket_group_id, array $query = array()) : \Eventbrite\Model\DataType\TicketGroup {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\TicketGroup::class;
        $response = $this->request('GET', "/ticket_groups/{$ticket_group_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Create a Ticket Group
     *
     * @param string $organization_id
     *   Organization ID.
     * @param \Eventbrite\Model\DataType\TicketGroupCreate $ticket_group
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\TicketGroup|\Eventbrite\Model\DataType\Error
     */
    public function createOrganizationTicketGroup(string $organization_id, ?\Eventbrite\Model\DataType\TicketGroupCreate $ticket_group = null, array $query = array()) {
        $query['ticket_group'] = $ticket_group;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\TicketGroup::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/organizations/{$organization_id}/ticket_groups/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Update a Ticket Group
     *
     * @param string $ticket_group_id
     *   Ticket Group ID.
     * @param \Eventbrite\Model\DataType\TicketGroupCreate $ticket_group
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\TicketGroup
     */
    public function updateTicketGroup(string $ticket_group_id, ?\Eventbrite\Model\DataType\TicketGroupCreate $ticket_group = null, array $query = array()) : \Eventbrite\Model\DataType\TicketGroup {
        $query['ticket_group'] = $ticket_group;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\TicketGroup::class;
        $response = $this->request('POST', "/ticket_groups/{$ticket_group_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Add a Ticket Class to  Ticket Groups
     *
     * @param string $organization_id
     *   ID of the Organization that owns the Ticket Group.
     * @param string $event_id
     *   ID of the Event that owns the Ticket Class.
     * @param string $ticket_class_id
     *   ID of the Ticket Class to add to the Ticket Group.
     * @param array $ticket_group_ids
     *   a list of ticket groups that will have the ticket class added to them
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function postOrganizationEventTicketClassTicketGroups(string $organization_id, string $event_id, string $ticket_class_id, ?array $ticket_group_ids = null, array $query = array()) : \Eventbrite\Model\ModelBase {
        $query['ticket_group_ids'] = $ticket_group_ids;
        $response_types = [];
        $response_types[204] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('POST', "/organizations/{$organization_id}/events/{$event_id}/ticket_classes/{$ticket_class_id}/ticket_groups/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * List Ticket Groups by Organization
     *
     * @param string $organization_id
     *   Organization ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function getOrganizationTicketGroups(string $organization_id, array $query = array()) : \Eventbrite\Model\ModelBase {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/organizations/{$organization_id}/ticket_groups/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Delete a Ticket Group
     *
     * @param string $ticket_group_id
     *   Ticket Group ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function deleteTicketGroup(string $ticket_group_id, array $query = array()) : \Eventbrite\Model\ModelBase {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('DELETE', "/ticket_groups/{$ticket_group_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
}
