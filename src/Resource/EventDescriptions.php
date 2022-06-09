<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Event Description
 */
class EventDescriptions extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve Full HTML Description
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function getEventDescription(string $event_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/events/{$event_id}/description/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
}
