<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Media
 */
class Media extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve Media
     *
     * @param string $media_id
     *   Media ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\Image
     */
    public function getMediumWidthHeight(string $media_id, array $query = array()) : \Eventbrite\Model\DataType\Image {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\Image::class;
        $response = $this->request('GET', "/media/{$media_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Upload a Media File
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\MediaUploadPost|\Eventbrite\Model\DataType\Error
     */
    public function postMediaUpload(array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\MediaUploadPost::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/media/upload/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
    /**
     * Retrieve a Media Upload
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\MediaUpload
     */
    public function getMediaUpload(array $query = array()) : \Eventbrite\Model\DataType\MediaUpload {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\MediaUpload::class;
        $response = $this->request('GET', "/media/upload/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromRequest'], [$response->getBody(), '', '']);
    }
    
}
