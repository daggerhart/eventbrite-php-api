<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Event Series
 */
class EventSeries extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve an Event Series
     *
     * @param string $event_series_id
     *   Event Series ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Event
     */
    public function getSeries(string $event_series_id, array $query = array()) : \Eventbrite\Model\DataType\Event {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Event::class;
        $response = $this->request('GET', "/series/{$event_series_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
}
