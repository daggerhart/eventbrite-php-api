<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Organization
 */
class Organizations extends \Eventbrite\Model\ResourceBase
{
    /**
     * List your Organizations
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Organization
     */
    public function getUsersMeOrganizations(array $query = array()) : \Eventbrite\Model\Collection\Organization {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Organization::class;
        $response = $this->request('GET', "/users/me/organizations/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), 'organizations', '\\Eventbrite\\Model\\DataType\\Organization']);
    }
    
    /**
     * List Organizations by User
     *
     * @param string $user_id
     *   User ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Organization
     */
    public function getUserOrganizations(string $user_id, array $query = array()) : \Eventbrite\Model\Collection\Organization {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Organization::class;
        $response = $this->request('GET', "/users/{$user_id}/organizations/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), 'organizations', '\\Eventbrite\\Model\\DataType\\Organization']);
    }
    
}
