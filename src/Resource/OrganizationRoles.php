<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Organization Roles
 */
class OrganizationRoles extends \Eventbrite\Model\ResourceBase
{
    /**
     * List Roles by Organization
     *
     * @param string $organization_id
     *   Organization ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\Collection\Role
     */
    public function getOrganizationRoles(string $organization_id, array $query = array()) : \Eventbrite\Model\Collection\Role {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\Collection\Role::class;
        $response = $this->request('GET', "/organizations/{$organization_id}/roles/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'roles', '\\Eventbrite\\Model\\DataType\\Role']);
    }
    
}
