<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/12
 * Time: 下午2:10
 */
require_once __DIR__ . '/../config.php';
use SOpenApi\BaseApiClient;

class StatisticsClient extends BaseApiClient
{
    const USER_REGION_DISTRIBUTION = SOPENAPI_BASE_URL . '/openapi/yuqing/getUserRegionDistribution';

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
}