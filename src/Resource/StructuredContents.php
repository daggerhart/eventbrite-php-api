<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Structured Content
 */
class StructuredContents extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve Latest Published Version of Structured Content by Event Id
     *
     * @param string $id
     *   Event Id
     * @param string $purpose
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\StructuredContentPage|\Eventbrite\Model\ModelBase
     */
    public function getEventStructuredContent(string $id, string $purpose, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\StructuredContentPage::class;
        $response_types[400] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/events/{$id}/structured_content/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Retrieve Latest Working Version of Structured Content by Event Id
     *
     * @param string $id
     *   Event Id
     * @param string $purpose
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\StructuredContentPage|\Eventbrite\Model\ModelBase
     */
    public function getEventStructuredContentEdit(string $id, string $purpose, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\StructuredContentPage::class;
        $response_types[400] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/events/{$id}/structured_content/edit/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Set Structured Content by Event Id and Version
     *
     * @param string $id
     *   Event Id
     * @param string $version
     *   Structured Content Version
     * @param StructuredContentPageAccessType $access_type
     * @param array $modules
     *   Structured content modules.
     * @param bool $publish
     *   Boolean indicating whether to publish contents after saving.
     * @param StructuredContentPurpose $purpose
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\StructuredContentPage|\Eventbrite\Model\ModelBase
     */
    public function postEventStructuredContents(string $id, string $version, ?StructuredContentPageAccessType $access_type = null, ?array $modules = null, ?bool $publish = null, ?StructuredContentPurpose $purpose = null, array $query = array()) {
        $query['access_type'] = $access_type;
        $query['modules'] = $modules;
        $query['publish'] = $publish;
        $query['purpose'] = $purpose;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\StructuredContentPage::class;
        $response_types[400] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('POST', "/events/{$id}/structured_content/{$version}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
}
