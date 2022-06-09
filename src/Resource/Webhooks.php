<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Webhooks
 */
class Webhooks extends \Eventbrite\Model\ResourceBase
{
    /**
     * Create Webhooks by Organization ID
     *
     * @param string $organization_id
     *   Organization ID
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Webhook
     */
    public function createOrganizationWebhooks(string $organization_id, array $query = array()) : \Eventbrite\Model\DataType\Webhook {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Webhook::class;
        $response = $this->request('POST', "/organizations/{$organization_id}/webhooks/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Create Webhooks - deprecated
     *
     * @param string $organization_id
     *   Organization ID
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Webhook|\Eventbrite\Model\ModelBase
     */
    public function createWebhooks(string $organization_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Webhook::class;
        $response_types[403] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('POST', "/webhooks/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * List Webhook by Organization ID
     *
     * @param string $organization_id
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function getOrganizationWebhooks(string $organization_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/organizations/{$organization_id}/webhooks/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'webhooks', '\\Eventbrite\\Model\\ModelBase']);
    }
    
    /**
     * List of Webhooks - deprecation
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function getWebhooks(array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/webhooks/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'webhooks', '\\Eventbrite\\Model\\ModelBase']);
    }
    
    /**
     * Delete Webhook by ID
     *
     * @param string $id
     *   Webhook ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function deleteWebhook(string $id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[403] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('DELETE', "/webhooks/{$id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
}
