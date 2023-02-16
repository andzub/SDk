<?php

declare(strict_types=1);

namespace Api\Client\HttpClient\Response;

use JsonException;
use Psr\Http\Message\ResponseInterface;

final class Response
{
    /**
     * @throws JsonException
     */
    public static function getContent(ResponseInterface $response): array
    {
        return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
    }
}
