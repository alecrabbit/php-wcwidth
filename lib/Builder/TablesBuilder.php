<?php

declare(strict_types=1);
// 27.02.23
namespace AlecRabbit\WCWidth\Builder;

use Symfony\Component\HttpClient\HttpClient;

final class TablesBuilder
{
    private const URL_UNICODE_DERIVED_AGE = 'https://www.unicode.org/Public/UCD/latest/ucd/DerivedAge.txt';
    private const URL_EASTASIAN_WIDTH = 'https://www.unicode.org/Public/{version}/ucd/EastAsianWidth.txt';
    private const URL_DERIVED_CATEGORY = 'https://www.unicode.org/Public/{version}/ucd/extracted/DerivedGeneralCategory.txt';
    private const EXCLUDE_VERSIONS = ['2.0.0', '2.1.2', '3.0.0', '3.1.0', '3.2.0', '4.0.0'];

    public function build(): void
    {
        $client = HttpClient::create();
        $response = $client->request('GET', self::URL_UNICODE_DERIVED_AGE);

        $statusCode = $response->getStatusCode();
        $contentType = $response->getHeaders();
        $content = $response->getContent();

        dump($statusCode, $contentType, $content);
    }
}