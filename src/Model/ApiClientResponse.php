<?php declare(strict_types=1);

namespace Eventbrite\Model;

/**
 * Api client response handler.
 */
class ApiClientResponse extends \GuzzleHttp\Psr7\Response
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    protected \Psr\Http\Message\ResponseInterface $inner;

    /**
     * {@inheritdoc}
     */
    public function __construct(int $status = 200, array $headers = [], $body = NULL, string $version = '1.1', string $reason = NULL) {
        parent::__construct($status, $headers, $body, $version, $reason);
    }
    
    /**
     * @return array
     */
    public function getJson() : array {
        return \json_decode(parent::getBody()->getContents(), true);
    }
    
}
