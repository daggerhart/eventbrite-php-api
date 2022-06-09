<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Event Capacity
 */
class EventCapacities extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve a Capacity Tier
     *
     * @param string $event_id
     *   Event ID
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\CapacityTier|\Eventbrite\Model\DataType\Error
     */
    public function getEventCapacityTier(string $event_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\CapacityTier::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/events/{$event_id}/capacity_tier/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Update a Capacity Tier
     *
     * @param string $event_id
     *   Event ID
     * @param \Eventbrite\Model\DataType\CapacityTierUpdate $capacity_tier
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\CapacityTier|\Eventbrite\Model\DataType\Error
     */
    public function updateEventCapacityTier(string $event_id, ?\Eventbrite\Model\DataType\CapacityTierUpdate $capacity_tier = null, array $query = array()) {
        $query['capacity_tier'] = $capacity_tier;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\CapacityTier::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/capacity_tier/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
}
