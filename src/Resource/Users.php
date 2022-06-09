<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: User
 */
class Users extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve Information about a User Account
     *
     * @param string $user_id
     *   User ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function getUser(string $user_id, array $query = array()) : \Eventbrite\Model\ModelBase {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/users/{$user_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Retrieve Information About Your User Account
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\User
     */
    public function getUsersMe(array $query = array()) : \Eventbrite\Model\DataType\User {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\User::class;
        $response = $this->request('GET', "/users/me/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
}
