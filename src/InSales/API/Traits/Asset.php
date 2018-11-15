<?php

namespace InSales\API\Traits;

use InSales\API\ApiResponse;

/**
 * Trait Asset Часть API-клиента, отвечающая за ассеты
 * @package InSales\Traits
 * @mixin \InSales\API\ApiClient
 */
trait Asset
{
    /**
     * Получение ассета
     * @param int $id Идентификатор ассета
     * @param int $themeId Идентификатор темы
     * @return ApiResponse
     */
    public function getAsset(int $id, int $themeId) : ApiResponse
    {
        return $this->client->executeGetRequest(
            $this->generateCompoundUrl(self::API_URL_ASSETS, $themeId, $id),
            $id
        );
    }

    /**
     * Получение ассетов темы
     * @param integer $themeId Идентификатор темы
     * @return ApiResponse
     */
    public function getAssets(int $themeId) : ApiResponse
    {
        return $this->client->executeListRequest($this->generateCompoundUrl(self::API_URL_ASSETS, $themeId));
    }

    /**
     * Обновление ассета
     * @param int $id Идентификатор ассета
     * @param int $themeId Идентификатор темы
     * @param array $data Массив данных
     * @return ApiResponse
     */
    public function updateAsset(int $id, int $themeId, array $data) : ApiResponse
    {
        return $this->client->executeUpdateRequest(
            $this->generateCompoundUrl(self::API_URL_ASSETS, $themeId, $id),
            $data
        );
    }
}
