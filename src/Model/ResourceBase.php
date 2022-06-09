<?php declare(strict_types=1);

namespace Eventbrite\Model;

/**
 * Shared functionality across resources.
 */
abstract class ResourceBase
{
    /**
     * Guzzle client.
     *
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * @param \Eventbrite\Service\ApiClient $client
     *   Http client.
     */
    public function __construct(\Eventbrite\Service\ApiClient $client) {
        $this->client = $client;
    }
    
    /**
     * Send a request.
     *
     * @param string $method
     *   The method of HTTP request.
     * @param string $endpoint_uri
     *   The path of endpoint to request.
     * @param array $query
     *   Request parameters.
     *
     * @return \Eventbrite\Model\ApiClientResponse
     *   Response.
     */
    protected function request(string $method, string $endpoint_uri, array $query = []) : \Eventbrite\Model\ApiClientResponse {
        $options = [];
        if (!empty($query)) {
            $options['query'] = array_filter($query, function ($param) {
                return !is_null($param);
            });
        }
        return $this->client->request($method, $endpoint_uri, $options);
    }
    
}
