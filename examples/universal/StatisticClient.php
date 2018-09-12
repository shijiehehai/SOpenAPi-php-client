<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/12
 * Time: 上午10:12
 */
require_once __DIR__ . '/../config.php';
use SOpenApi\BaseApiClient;

class StatisticClient extends BaseApiClient
{
    const REGION_DISTRIBUTION_URL = SOPENAPI_BASE_URL . '/openapi/yuqing/getUserRegionDistribution';
    const SOURCE_INFO_URL = SOPENAPI_BASE_URL . '/openapi/yuqing/getUserSourceInfos';

    /**
     * 来源类型舆情数量统计分布
     * @param int $dateType
     * @param string $beginDate
     * @param string $endDate
     * @return mixed
     * User: shijie
     * 2018/9/12 上午10:17
     */
    public function getUserSourceInfos($dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
    {
        $uri = self::SOURCE_INFO_URL;
        $params = [
            'date_type' => $dateType,
            'begin_date' => $beginDate,
            'end_date' => $endDate
        ];
        $response = $this->post($uri, $params);
        return $response;
    }

    /**
     * 地区舆情数量统计分布
     * @param int $dateType
     * @param string $beginDate
     * @param string $endDate
     * @return mixed
     * User: shijie
     * 2018/9/12 上午10:18
     */
    public function getUserRegionDistribution($dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
    {
        $uri = self::REGION_DISTRIBUTION_URL;
        $params = [
            'date_type' => $dateType,
            'begin_date' => $beginDate,
            'end_date' => $endDate
        ];
        $response = $this->post($uri, $params);
        return $response;
    }
}