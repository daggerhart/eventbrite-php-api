<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Event Teams
 */
class EventTeams extends \Eventbrite\Model\ResourceBase
{
    /**
     * List by Event
     *
     * @param string $event_id
     *   The event ID that the teams will be retrieved from.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\PaginationCollection
     */
    public function getEventTeams(string $event_id, array $query = array()) : \Eventbrite\Model\PaginationCollection {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\PaginationCollection::class;
        $response = $this->request('GET', "/events/{$event_id}/teams/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'teams', '\\Eventbrite\\Model\\DataType\\EventTeamResponse']);
    }
    
    /**
     * Retrieve Team
     *
     * @param string $event_id
     *   The event ID that the team will be retrieved from.
     * @param string $team_id
     *   The team ID that will be retrieved.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\EventTeamResponse
     */
    public function getEventTeam(string $event_id, string $team_id, array $query = array()) : \Eventbrite\Model\DataType\EventTeamResponse {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\EventTeamResponse::class;
        $response = $this->request('GET', "/events/{$event_id}/teams/{$team_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * List Attendees by Team
     *
     * @param string $event_id
     *   The event ID that the team will be retrieved from.
     * @param string $team_id
     *   The team ID that will be retrieved.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Attendee
     */
    public function getEventTeamAttendees(string $event_id, string $team_id, array $query = array()) : \Eventbrite\Model\Collection\Attendee {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Attendee::class;
        $response = $this->request('GET', "/events/{$event_id}/teams/{$team_id}/attendees/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'attendees', '\\Eventbrite\\Model\\DataType\\Attendee']);
    }
    
    /**
     * Create a Team
     *
     * @param string $event_id
     *   The event ID that the team will be created from.
     * @param string $public_event_id
     *   Public Event Id
     * @param string $name
     *   Name of the team
     * @param string $password
     *   Password of the team
     * @param string $preferred_start_time
     *   Preferred start time the event
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function createEventTeamsCreate(string $event_id, ?string $public_event_id = null, ?string $name = null, ?string $password = null, ?string $preferred_start_time = null, array $query = array()) : \Eventbrite\Model\ModelBase {
        $query['public_event_id'] = $public_event_id;
        $query['name'] = $name;
        $query['password'] = $password;
        $query['preferred_start_time'] = $preferred_start_time;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('POST', "/events/{$event_id}/teams/create/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Verify password for a team
     *
     * @param string $event_id
     *   The event ID of the team which the password will be checked
     * @param string $team_id
     *   The team ID which the password will be checked
     * @param string $password
     *   Password to verify
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function postEventTeamCheckPassword(string $event_id, string $team_id, ?string $password = null, array $query = array()) : \Eventbrite\Model\ModelBase {
        $query['password'] = $password;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('POST', "/events/{$event_id}/teams/{$team_id}/check_password/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Search teams by name Team
     *
     * @param string $event_id
     *   The event ID from which we want to search teams
     * @param string $term
     *   Search term.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\PaginationCollection
     */
    public function getEventTeamsSearchTermTermS(string $event_id, string $term, array $query = array()) : \Eventbrite\Model\PaginationCollection {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\PaginationCollection::class;
        $response = $this->request('GET', "/events/{$event_id}/teams/search/?term={$term}", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'teams', '\\Eventbrite\\Model\\ModelBase']);
    }
    
}
