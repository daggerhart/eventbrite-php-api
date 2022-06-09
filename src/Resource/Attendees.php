<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Attendee
 */
class Attendees extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve an Attendee
     *
     * @param string $event_id
     *   Event ID.
     * @param string $attendee_id
     *   Attendee ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Attendee
     */
    public function getEventAttendee(string $event_id, string $attendee_id, array $query = array()) : \Eventbrite\Model\DataType\Attendee {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Attendee::class;
        $response = $this->request('GET', "/events/{$event_id}/attendees/{$attendee_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * List Attendees by Event
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Attendee
     */
    public function getEventAttendees(string $event_id, array $query = array()) : \Eventbrite\Model\Collection\Attendee {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Attendee::class;
        $response = $this->request('GET', "/events/{$event_id}/attendees/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), 'attendees', '\\Eventbrite\\Model\\DataType\\Attendee']);
    }
    
    /**
     * List Attendees by Organization
     *
     * @param string $organization_id
     *   Organization ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Attendee
     */
    public function getOrganizationAttendees(string $organization_id, array $query = array()) : \Eventbrite\Model\Collection\Attendee {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Attendee::class;
        $response = $this->request('GET', "/organizations/{$organization_id}/attendees/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), 'attendees', '\\Eventbrite\\Model\\DataType\\Attendee']);
    }
    
}
