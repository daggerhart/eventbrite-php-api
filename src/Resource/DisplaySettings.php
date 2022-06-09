<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Display Settings
 */
class DisplaySettings extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve Display Settings
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\DisplaySettings
     */
    public function getEventDisplaySettings(string $event_id, array $query = array()) : \Eventbrite\Model\DataType\DisplaySettings {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\DisplaySettings::class;
        $response = $this->request('GET', "/events/{$event_id}/display_settings/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Update Display Settings
     *
     * @param string $event_id
     *   Event ID.
     * @param \Eventbrite\Model\DataType\DisplaySettings $display_settings
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\DisplaySettings
     */
    public function updateEventDisplaySettings(string $event_id, ?\Eventbrite\Model\DataType\DisplaySettings $display_settings = null, array $query = array()) : \Eventbrite\Model\DataType\DisplaySettings {
        $query['display_settings'] = $display_settings;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\DisplaySettings::class;
        $response = $this->request('POST', "/events/{$event_id}/display_settings/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
}
