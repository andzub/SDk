<?php

declare(strict_types=1);

namespace Api\Client\Endpoint;

use Api\Client\HttpClient\Response\Response;
use Api\Client\Sdk;
use Http\Client\Exception;
use JsonException;

final class Withdrawal
{
    private Sdk $sdk;

    public function __construct(Sdk $sdk)
    {
        $this->sdk = $sdk;
    }

    /**
     * @throws Exception
     * @throws JsonException
     */
    public function getList(): array
    {
        return Response::getContent($this->sdk->getHttpClient()->get('/v1/withdrawals/user-withdrawals'));
    }
}
