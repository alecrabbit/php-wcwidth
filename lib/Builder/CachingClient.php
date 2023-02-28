<?php

declare(strict_types=1);
// 27.02.23
namespace AlecRabbit\WCWidth\Builder;

use AlecRabbit\WCWidth\Builder\Contract\ICachingClient;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\Cache\ItemInterface;
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
                function (ItemInterface $item) use ($url) {
//                    $item->expiresAfter(self::TTL);
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
        if (200 !== $statusCode) {
            throw new \Exception('Error: Status code "' . $statusCode . '". Url: "' . $response->getInfo('url') . '"');
        }
        $contentType = $response->getHeaders()['content-type'][0];
        if (!str_contains($contentType, 'text/plain')) {
            throw new \Exception('Error: Content type "' . $contentType . '"');
        }
    }
}