<?php

namespace InSales\API\Traits;

use InSales\API\ApiResponse;

/**
 * Theme WebHook Часть API-клиента, отвечающая за темы
 * @package InSales\Traits
 * @mixin \InSales\API\ApiClient
 */
trait Theme
{
    /**
     * Получение темы
     * @param int $id Идентификатор темы
     * @return ApiResponse
     */
    public function getTheme(int $id) : ApiResponse
    {
        return $this->client->executeGetRequest(
            $this->generateUrl(self::API_URL_THEME, $id),
            $id
        );
    }

    /**
     * Получение списка тем
     * @return ApiResponse
     */
    public function getThemes() : ApiResponse
    {
        return $this->client->executeListRequest($this->generateUrl(self::API_URL_THEME));
    }
}
