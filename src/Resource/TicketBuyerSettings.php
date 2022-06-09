<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Ticket Buyer Settings
 */
class TicketBuyerSettings extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve Ticket Buyer Settings by Event
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\TicketBuyerSettings|\Eventbrite\Model\DataType\Error
     */
    public function getEventTicketBuyerSettings(string $event_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\TicketBuyerSettings::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/events/{$event_id}/ticket_buyer_settings/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Update Ticket Buyer Settings for an Event
     *
     * @param string $event_id
     *   Event ID.
     * @param \Eventbrite\Model\DataType\TicketBuyerSettingsUpdate $ticket_buyer_settings
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\TicketBuyerSettings|\Eventbrite\Model\DataType\Error
     */
    public function updateEventTicketBuyerSettings(string $event_id, ?\Eventbrite\Model\DataType\TicketBuyerSettingsUpdate $ticket_buyer_settings = null, array $query = array()) {
        $query['ticket_buyer_settings'] = $ticket_buyer_settings;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\TicketBuyerSettings::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response_types[404] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/ticket_buyer_settings/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
}
