<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Event Search
 */
class EventSearches extends \Eventbrite\Model\ResourceBase
{
    /**
     * Search Events - deprecated
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Event
     */
    public function getEventsSearches(array $query = array()) : \Eventbrite\Model\Collection\Event {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Event::class;
        $response = $this->request('GET', "/events/search/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'events', '\\Eventbrite\\Model\\DataType\\Event']);
    }
    
}
