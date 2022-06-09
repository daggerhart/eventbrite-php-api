<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Seat Map
 */
class SeatMaps extends \Eventbrite\Model\ResourceBase
{
    /**
     * List Seat Maps by Organization
     *
     * @param string $organization_id
     *   Organization ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function getOrganizationSeatmapsVenueIdVenueNameFilter(string $organization_id, array $query = array()) : \Eventbrite\Model\ModelBase {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/organizations/{$organization_id}/seatmaps/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Create Seat Map For Event
     *
     * @param string $event_id
     *   Event Id
     * @param string $source_seatmap_id
     *   m1 (string, required) - ID of source Seat Map to copy data from.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\SeatMap|\Eventbrite\Model\DataType\Error
     */
    public function createEventSeatmap(string $event_id, ?string $source_seatmap_id = null, array $query = array()) {
        $query['source_seatmap_id'] = $source_seatmap_id;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\SeatMap::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/seatmaps/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
}
