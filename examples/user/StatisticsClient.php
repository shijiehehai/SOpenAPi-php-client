<?php

require_once __DIR__ . '/../config.php';
use SOpenApi\BaseApiClient;

class StatisticsClient extends BaseApiClient
{
    const USER_REGION_DISTRIBUTION = SOPENAPI_BASE_URL . '/openapi/yuqing/getUserRegionDistribution';
    const USER_SOURCE_DISTRIBUTION = SOPENAPI_BASE_URL . '/openapi/yuqing/getUserSourceDistribution';
    const USER_TOP_SITE = SOPENAPI_BASE_URL . '/openapi/yuqing/getUserTopSite';
    const USER_ATTRIBUTE_COUNT = SOPENAPI_BASE_URL . '/openapi/yuqing/getUserAttributeCount';
    const USER_ATTRIBUTE_DISTRIBUTION = SOPENAPI_BASE_URL . '/openapi/yuqing/getUserAttributeDistribution';
    const USER_HOT_WORDS = SOPENAPI_BASE_URL . '/openapi/yuqing/getUserHotWord';
    const USER_HOT_NEWS = SOPENAPI_BASE_URL . '/openapi/yuqing/getUserHotNews';
    const USER_ATTRIBUTE_TREND = SOPENAPI_BASE_URL . '/openapi/yuqing/getUserAttributeTrend';


    /**
     * 用户层级地区舆情数量统计分布
     * @param int $dateType
     * @param string $beginDate
     * @param string $endDate
     * @return mixed
     * User: shijie
     * 2018/9/12 下午2:33
     */
    public function getUserRegionDistribution($dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
    {
        $uri = self::USER_REGION_DISTRIBUTION;
        $params = [
            'date_type' => $dateType,
            'type' => $beginDate,
            'attribute' => $endDate,
        ];
        $response = $this->post($uri, $params);
        return $response;
    }

    public function getUserSourceDistribution($dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
    {
        $uri = self::USER_SOURCE_DISTRIBUTION;
        $params = [
            'date_type' => $dateType,
            'type' => $beginDate,
            'attribute' => $endDate,
        ];
        $response = $this->post($uri, $params);
        return $response;
    }

    public function getUserTopSites($dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
    {
        $uri = self::USER_TOP_SITE;
        $params = [
            'date_type' => $dateType,
            'type' => $beginDate,
            'attribute' => $endDate,
        ];
        $response = $this->post($uri, $params);
        return $response;
    }

    public function getUserAttributeCount($dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
    {
        $uri = self::USER_ATTRIBUTE_COUNT;
        $params = [
            'date_type' => $dateType,
            'type' => $beginDate,
            'attribute' => $endDate,
        ];
        $response = $this->post($uri, $params);
        return $response;
    }

    public function getUserAttributeDistribution($dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
    {
        $uri = self::USER_ATTRIBUTE_DISTRIBUTION;
        $params = [
            'date_type' => $dateType,
            'type' => $beginDate,
            'attribute' => $endDate,
        ];
        $response = $this->post($uri, $params);
        return $response;
    }

    public function getUserHotWords($dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
    {
        $uri = self::USER_HOT_WORDS;
        $params = [
            'date_type' => $dateType,
            'type' => $beginDate,
            'attribute' => $endDate,
        ];
        $response = $this->post($uri, $params);
        return $response;
    }

    public function getUserHotNews($dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
    {
        $uri = self::USER_HOT_NEWS;
        $params = [
            'date_type' => $dateType,
            'type' => $beginDate,
            'attribute' => $endDate,
        ];
        $response = $this->post($uri, $params);
        return $response;
    }

    public function getUserAttributeTrend($dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
    {
        $uri = self::USER_ATTRIBUTE_TREND;
        $params = [
            'date_type' => $dateType,
            'type' => $beginDate,
            'attribute' => $endDate,
        ];
        $response = $this->post($uri, $params);
        return $response;
    }
}