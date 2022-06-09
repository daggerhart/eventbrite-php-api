<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Discount
 */
class Discounts extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve a Discount
     *
     * @param string $discount_id
     *   Discount ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Discount
     */
    public function getDiscount(string $discount_id, array $query = array()) : \Eventbrite\Model\DataType\Discount {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Discount::class;
        $response = $this->request('GET', "/discounts/{$discount_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Create a Discount
     *
     * @param string $organization_id
     *   Organization ID.
     * @param \Eventbrite\Model\DataType\DiscountCreate $discount
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Discount|\Eventbrite\Model\DataType\DiscountCreateError
     */
    public function createOrganizationDiscount(string $organization_id, ?\Eventbrite\Model\DataType\DiscountCreate $discount = null, array $query = array()) {
        $query['discount'] = $discount;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Discount::class;
        $response_types[400] = \Eventbrite\Model\DataType\DiscountCreateError::class;
        $response = $this->request('POST', "/organizations/{$organization_id}/discounts/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Update a Discount
     *
     * @param string $discount_id
     *   Discount ID.
     * @param \Eventbrite\Model\DataType\DiscountCreate $discount
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Discount|\Eventbrite\Model\DataType\DiscountCreateError
     */
    public function updateDiscount(string $discount_id, ?\Eventbrite\Model\DataType\DiscountCreate $discount = null, array $query = array()) {
        $query['discount'] = $discount;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Discount::class;
        $response_types[400] = \Eventbrite\Model\DataType\DiscountCreateError::class;
        $response = $this->request('POST', "/discounts/{$discount_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Search Discounts by Organization
     *
     * @param string $organization_id
     *   Organization ID.
     * @param string $scope
     *   Discount scope.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function getOrganizationDiscountsScope(string $organization_id, string $scope, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/organizations/{$organization_id}/discounts/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Delete a Discount
     *
     * @param string $discount_id
     *   Discount ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Discount|\Eventbrite\Model\DataType\Error
     */
    public function deleteDiscount(string $discount_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Discount::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('DELETE', "/discounts/{$discount_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
}
