<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/12
 * Time: 上午10:01
 */
require_once __DIR__ . '/../config.php';
use SOpenApi\BaseApiClient;

class ThemeStatisticClient extends BaseApiClient
{
    const THEME_ATTRIBUTE_INFO_URL = SOPENAPI_BASE_URL . '/openapi/yuqing/getThemeAttributeInfo';

    /**
     * 特定专题不同情感的舆情数量统计分布
     * @param $themeName  专题名称
     * @param int $dateType
     * @param string $beginDate
     * @param string $endDate
     * @return mixed
     * User: shijie
     * 2018/9/12 上午10:36
     */
    public function getThemeAttributeInfo($themeName, $dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
    {
        $uri = self::THEME_ATTRIBUTE_INFO_URL;
        $params = [
            'theme_name' => $themeName,
            'date_type' => $dateType,
            'begin_date' => $beginDate,
            'end_date' => $endDate
        ];
        $response = $this->post($uri, $params);
        return $response;
    }
}