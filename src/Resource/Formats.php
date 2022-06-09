<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Formats
 */
class Formats extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve a Format
     *
     * @param string $format_id
     *   Format ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Format
     */
    public function getFormat(string $format_id, array $query = array()) : \Eventbrite\Model\DataType\Format {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Format::class;
        $response = $this->request('GET', "/formats/{$format_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * List Formats
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function getFormats(array $query = array()) : \Eventbrite\Model\ModelBase {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/formats/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
}
