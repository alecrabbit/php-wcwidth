<?php

declare(strict_types=1);
// 27.02.23
namespace AlecRabbit\WCWidth\Core;

use AlecRabbit\WCWidth\Core\Contract\ICachingClient;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class CachingClient implements ICachingClient
{
    private const TTL = 86400;
    private HttpClientInterface $httpClient;
    private FilesystemAdapter $cache;

    public function __construct()
    {
        $this->httpClient = HttpClient::create();
        $this->cache =
            new FilesystemAdapter(
                defaultLifetime: self::TTL,
            );
    }

    public function get(string $url): string
    {
        return
            $this->cache->get(
                $this->encodeKey($url),
                function () use ($url) {
                    Logger::debug(sprintf('Cache miss. Fetching content from: %s', $url));
                    return $this->getContent($url);
                }
            );
    }

    private function encodeKey(string $url): string
    {
        return
            hash('sha512', $url);
    }

    private function getContent(string $url): string
    {
        $response = $this->httpClient->request('GET', $url);

        $this->assertResponse($response);

        return
            $response->getContent();
    }

    private function assertResponse(ResponseInterface $response): void
    {
        // simple asserts
        $statusCode = $response->getStatusCode();
        Logger::debug(sprintf('Status code: %s', $statusCode));
        if (200 !== $statusCode) {
            throw new \Exception('Error: Status code "' . $statusCode . '". Url: "' . $response->getInfo('url') . '"');
        }
        $contentType = $response->getHeaders()['content-type'][0];
        Logger::debug(sprintf('Content type: %s', $contentType));
        if (!str_contains($contentType, 'text/plain')) {
            throw new \Exception('Error: Content type "' . $contentType . '"');
        }
    }
}