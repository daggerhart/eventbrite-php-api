<?php declare(strict_types=1);

namespace Eventbrite\Model;

/**
 * Api client response handler.
 *
 * ResponseInterface
 * @method getStatusCode()
 * @method withStatus($code, $reasonPhrase = '')
 * @method getReasonPhrase()
 *
 * MessageInterface
 * @method getProtocolVersion()
 * @method withProtocolVersion($version)
 * @method getHeaders()
 * @method hasHeader($name)
 * @method getHeader($name)
 * @method getHeaderLine($name)
 * @method withHeader($name, $value)
 * @method withAddedHeader($name, $value)
 * @method withoutHeader($name)
 * @method withBody(\Psr\Http\Message\StreamInterface $body)
 */
class ApiClientResponse implements \Psr\Http\Message\ResponseInterface
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    protected \Psr\Http\Message\ResponseInterface $inner;

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     */
    public function __construct(\Psr\Http\Message\ResponseInterface $response) {
        $this->inner = $response;
    }
    
    /**
     * @param string $method
     * @param array $args
     *
     * @return mixed
     */
    public function __call(string $method, array $args) {
        return call_user_func_array([$this->inner, $method], $args);
    }
    
    /**
     * @return array
     */
    public function getBody() : array {
        return \json_decode($this->inner->getBody(), true);
    }
    
}
