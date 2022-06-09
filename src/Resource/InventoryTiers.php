<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Inventory Tiers
 */
class InventoryTiers extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve an Inventory Tier
     *
     * @param string $event_id
     *   Event ID
     * @param string $inventory_tier_id
     *   Inventory Tier ID
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function getEventInventoryTier(string $event_id, string $inventory_tier_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/events/{$event_id}/inventory_tiers/{$inventory_tier_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Create an Inventory Tier
     *
     * @param string $event_id
     *   Event ID
     * @param \Eventbrite\Model\DataType\InventoryTierCreate $inventory_tier
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function createEventInventoryTier(string $event_id, ?\Eventbrite\Model\DataType\InventoryTierCreate $inventory_tier = null, array $query = array()) {
        $query['inventory_tier'] = $inventory_tier;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/inventory_tiers/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Create Multiple Inventory Tiers
     *
     * @param string $event_id
     *   Event ID
     * @param array $inventory_tiers
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function createEventInventoryTiers(string $event_id, ?array $inventory_tiers = null, array $query = array()) {
        $query['inventory_tiers'] = $inventory_tiers;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/inventory_tiers/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Update an Inventory Tier
     *
     * @param string $event_id
     *   Event ID
     * @param string $inventory_tier_id
     *   Inventory Tier ID
     * @param \Eventbrite\Model\DataType\InventoryTierUpdateBase $inventory_tier
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function updateEventInventoryTier(string $event_id, string $inventory_tier_id, ?\Eventbrite\Model\DataType\InventoryTierUpdateBase $inventory_tier = null, array $query = array()) {
        $query['inventory_tier'] = $inventory_tier;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/inventory_tiers/{$inventory_tier_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Update Multiple Inventory Tiers
     *
     * @param string $event_id
     *   Event ID
     * @param array $inventory_tiers
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function updateEventInventoryTiers(string $event_id, ?array $inventory_tiers = null, array $query = array()) {
        $query['inventory_tiers'] = $inventory_tiers;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/inventory_tiers/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * List Inventory Tiers by Event
     *
     * @param string $event_id
     *   Event ID
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\InventoryTier|\Eventbrite\Model\DataType\Error
     */
    public function getEventInventoryTiers(string $event_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\InventoryTier::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/events/{$event_id}/inventory_tiers/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), 'inventory_tiers', '\\Eventbrite\\Model\\DataType\\InventoryTier']);
    }
    
    /**
     * Delete an Inventory Tier
     *
     * @param string $event_id
     *   Event ID
     * @param string $inventory_tier_id
     *   Inventory Tier ID
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function deleteEventInventoryTier(string $event_id, string $inventory_tier_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('DELETE', "/events/{$event_id}/inventory_tiers/{$inventory_tier_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
}
