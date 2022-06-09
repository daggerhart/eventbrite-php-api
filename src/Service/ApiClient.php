<?php declare(strict_types=1);

namespace Eventbrite\Service;

/**
 * Client wrapper for automating common functionality.
 */
class ApiClient
{
    /**
     * Base url to API.
     *
     * @var string
     */
    protected string $host;

    /**
     * Request prefix, such as version number.
     *
     * @var string
     */
    protected string $requestPrefix;

    /**
     * Authorization token.
     *
     * @var string|null
     */
    protected ?string $authToken;

    /**
     * Guzzle client options.
     *
     * @var array
     */
    protected array $httpClientOptions = [];

    /**
     * @var \GuzzleHttp\ClientInterface
     */
    protected $httpClient;

    /**
     * @param string $host
     * @param string|null $auth_token
     * @param array $http_client_options
     */
    public function __construct(string $host, string $auth_token = null, array $http_client_options = []) {
        $url = parse_url($host);
        $url['scheme'] = $url['scheme'] ?? 'https';
        $this->host = "{$url['scheme']}://{$url['host']}";
        $this->authToken = $auth_token;
        $this->requestPrefix = trim($url['path'] ?? '', '/');
        $this->httpClientOptions = $http_client_options;
        $stack = new \GuzzleHttp\HandlerStack();
        $stack->setHandler(new \GuzzleHttp\Handler\CurlHandler());
        if ($this->authToken) {
            $stack->push($this->addRequestHeader('Authorization', 'Bearer ' . $this->authToken));
        }
        $this->httpClient = new \GuzzleHttp\Client(array_replace($this->httpClientOptions, ['handler' => $stack]));
    }
    
    /**
     * Combine host domain with request prefix.
     *
     * @param string $endpoint_uri
     *
     * @return string
     */
    public function requestUrl(string $endpoint_uri) {
        $endpoint_uri = ltrim($endpoint_uri, '/');
        return implode('/', [$this->host, $this->requestPrefix, $endpoint_uri]);
    }
    
    /**
     * Generic request.
     *
     * @param string $method
     * @param string $endpoint_uri
     * @param array $request_options
     *
     * @return \Eventbrite\Model\ApiClientResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(string $method, string $endpoint_uri, array $request_options = []) : \Psr\Http\Message\ResponseInterface {
        return new \Eventbrite\Model\ApiClientResponse($this->httpClient->request($method, $this->requestUrl($endpoint_uri), $request_options));
    }
    
    /**
     * Get guzzle client.
     *
     * @param string $header
     *   Case-insensitive header field name.
     * @param string|string[] $value
     *   Header value(s).
     *
     * @return callable
     *   Guzzle middleware handler.
     */
    protected function addRequestHeader(string $header, $value) {
        return function (callable $handler) use($header, $value) {
            return function (\Psr\Http\Message\RequestInterface $request, array $options) use($handler, $header, $value) {
                $request = $request->withHeader($header, $value);
                return $handler($request, $options);
            };
        };
    }
    
}
