<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Event Schedule
 */
class EventSchedules extends \Eventbrite\Model\ResourceBase
{
    /**
     * Create an event schedule
     *
     * @param string $event_id
     *   Event ID. Must be a valid series parent event.
     * @param \Eventbrite\Model\DataType\ScheduleBase $schedule
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Schedule|\Eventbrite\Model\DataType\Error
     */
    public function createEventSchedule(string $event_id, ?\Eventbrite\Model\DataType\ScheduleBase $schedule = null, array $query = array()) {
        $query['schedule'] = $schedule;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Schedule::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[403] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/schedules/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
}
