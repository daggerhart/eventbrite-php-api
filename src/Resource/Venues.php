<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Venue
 */
class Venues extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve a Venue
     *
     * @param string $venue_id
     *   Venue ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\VenueResponse
     */
    public function getVenue(string $venue_id, array $query = array()) : \Eventbrite\Model\DataType\VenueResponse {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\VenueResponse::class;
        $response = $this->request('GET', "/venues/{$venue_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Create a Venue
     *
     * @param string $organization_id
     *   Organization ID.
     * @param \Eventbrite\Model\DataType\VenueCreate $venue
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\VenueResponse
     */
    public function createOrganizationVenue(string $organization_id, ?\Eventbrite\Model\DataType\VenueCreate $venue = null, array $query = array()) : \Eventbrite\Model\DataType\VenueResponse {
        $query['venue'] = $venue;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\VenueResponse::class;
        $response = $this->request('POST', "/organizations/{$organization_id}/venues/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Update a Venue
     *
     * @param string $venue_id
     *   Venue ID.
     * @param \Eventbrite\Model\DataType\VenueCreate $venue
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\VenueResponse
     */
    public function updateVenue(string $venue_id, ?\Eventbrite\Model\DataType\VenueCreate $venue = null, array $query = array()) : \Eventbrite\Model\DataType\VenueResponse {
        $query['venue'] = $venue;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\VenueResponse::class;
        $response = $this->request('POST', "/venues/{$venue_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * List Venues by Organization
     *
     * @param string $organization_id
     *   Organization ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\PaginationCollection
     */
    public function getOrganizationVenues(string $organization_id, array $query = array()) : \Eventbrite\Model\PaginationCollection {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\PaginationCollection::class;
        $response = $this->request('GET', "/organizations/{$organization_id}/venues/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), 'venues', '\\Eventbrite\\Model\\DataType\\VenueResponse']);
    }
    
}
