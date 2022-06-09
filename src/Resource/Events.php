<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Event
 */
class Events extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve an Event
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Event
     */
    public function getEvent(string $event_id, array $query = array()) : \Eventbrite\Model\DataType\Event {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Event::class;
        $response = $this->request('GET', "/events/{$event_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Create an Event
     *
     * @param string $organization_id
     *   ID of the Organization that owns the Event.
     * @param \Eventbrite\Model\DataType\EventCreate $event
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Event|\Eventbrite\Model\DataType\Error
     */
    public function createOrganizationEvent(string $organization_id, ?\Eventbrite\Model\DataType\EventCreate $event = null, array $query = array()) {
        $query['event'] = $event;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Event::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/organizations/{$organization_id}/events/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Update an Event
     *
     * @param string $event_id
     *   Event ID.
     * @param \Eventbrite\Model\DataType\EventUpdate $event
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Event|\Eventbrite\Model\DataType\Error
     */
    public function updateEvent(string $event_id, ?\Eventbrite\Model\DataType\EventUpdate $event = null, array $query = array()) {
        $query['event'] = $event;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Event::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * List Events by Venue
     *
     * @param string $venue_id
     *   Venue ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Event
     */
    public function getVenueEvents(string $venue_id, array $query = array()) : \Eventbrite\Model\Collection\Event {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Event::class;
        $response = $this->request('GET', "/venues/{$venue_id}/events/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), 'events', '\\Eventbrite\\Model\\DataType\\Event']);
    }
    
    /**
     * List Events by Organization
     *
     * @param string $organization_id
     *   Organization ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Event|\Eventbrite\Model\DataType\Error
     */
    public function getOrganizationEvents(string $organization_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Event::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/organizations/{$organization_id}/events/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), 'events', '\\Eventbrite\\Model\\DataType\\Event']);
    }
    
    /**
     * List Events by Series
     *
     * @param string $event_series_id
     *   Event Series ID.
     * @param string $order_by
     *   Sort order for the list of Events.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Event
     */
    public function getSeriesEvents(string $event_series_id, string $order_by, array $query = array()) : \Eventbrite\Model\Collection\Event {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Event::class;
        $response = $this->request('GET', "/series/{$event_series_id}/events/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), 'events', '\\Eventbrite\\Model\\DataType\\Event']);
    }
    
    /**
     * Publish an Event
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function postEventPublish(string $event_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/publish/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Unpublish an Event
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function postEventUnpublish(string $event_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/unpublish/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Copy an Event
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Event|\Eventbrite\Model\DataType\Error
     */
    public function postEventCopy(string $event_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Event::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/copy/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Cancel an Event
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function postEventCancel(string $event_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/cancel/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Delete an Event
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function deleteEvent(string $event_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('DELETE', "/events/{$event_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
}
