<?php

namespace InSales\Tests\ApiClient\Get;

use InSales\API\ApiResponse;
use InSales\TestCase;

class NotFoundTest extends TestCase
{
    /**
     * @dataProvider getGetMethodsArrayProvider
     * @param string $method
     */
    public function testTest(string $method)
    {
        $client = $this->getApiClient(true);
        /** @var ApiResponse $response */
        $response = $client->$method(2);
        $allowedCodes = [404, 503];
        $this->assertTrue(in_array($response->getHttpCode(), $allowedCodes));
    }

}