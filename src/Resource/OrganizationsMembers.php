<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Organizations Members
 */
class OrganizationsMembers extends \Eventbrite\Model\ResourceBase
{
    /**
     * List Members of an Organization
     *
     * @param string $organization_id
     *   Organization ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function getOrganizationMembers(string $organization_id, array $query = array()) : \Eventbrite\Model\ModelBase {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/organizations/{$organization_id}/members/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
}
