<?php

declare(strict_types=1);
// 27.02.23
namespace AlecRabbit\WCWidth\Builder;

use AlecRabbit\WCWidth\Builder\Contract\ICachingClient;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class CachingClient implements ICachingClient
{
    private const TTL = 86400;
    private HttpClientInterface $httpClient;

    public function __construct()
    {
        $this->httpClient = HttpClient::create();
    }

    public function get(string $url): string
    {
        if(!file_exists($url)) {
            $content = $this->getContent($url);
            file_put_contents($url, $content);
        } else {
            $content = file_get_contents($url);
        }
        return $content;
    }

    private function assertResponse(ResponseInterface $response): void
    {
        $statusCode = $response->getStatusCode();
        if (200 !== $statusCode) {
            throw new \Exception('Error: Status code "' . $statusCode . '"');
        }
        $contetnType = $response->getHeaders()['content-type'][0];
        if ('text/plain' !== $contetnType) {
            throw new \Exception('Error: Content type "' . $contetnType . '"');
        }
    }

    private function getContent(string $url): string
    {
        $response = $this->httpClient->request('GET', $url);

        $this->assertResponse($response);

        return
            $response->getContent();
    }
}