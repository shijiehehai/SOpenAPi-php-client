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
    const THEME_YQ_LIST = SOPENAPI_BASE_URL . '/openapi/yuqing/getThemeYqList';
    const THEME_REGION_DISTRIBUTION = SOPENAPI_BASE_URL . '/openapi/yuqing/getThemeRegionDistribution';

    const THEME_SOURCE_DISTRIBUTION = SOPENAPI_BASE_URL . '/openapi/yuqing/getThemeSourceDistribution';
    const THEME_TOP_SITES = SOPENAPI_BASE_URL . '/openapi/yuqing/getThemeTopSite';
    const THEME_Broadcast_Path = SOPENAPI_BASE_URL . '/openapi/yuqing/getBroadcastPath';
    const THEME_HOT_NEWS = SOPENAPI_BASE_URL . '/openapi/yuqing/getThemeHotNews';
    const THEME_HOT_WORDS = SOPENAPI_BASE_URL . '/openapi/yuqing/getThemeHotWord';
    const THEME_Attribute_Trend= SOPENAPI_BASE_URL . '/openapi/yuqing/getThemeAttributeTrend';


    public function getThemeYqList($themeName, $newsType='all', $attribute='all', $dateType=7,$page=1, $pageCount=15)
    {
        $uri = self::THEME_YQ_LIST;
        $params = [
            'theme_name' => $themeName,
            'date_type' => $dateType,
            'news_type' => $newsType,
            'attribute' => $attribute,
            'page' => $page,
            'page_count' => $pageCount
        ];
        $response = $this->post($uri, $params);
        return $response;

    }

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
//
//    public function getThemerRegionDistribution($themeName, $dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
//    {
//        $uri = self::THEME_REGION_DISTRIBUTION;
//        $params = [
//            'theme_name' => $themeName,
//            'date_type' => $dateType,
//            'begin_date' => $beginDate,
//            'end_date' => $endDate
//        ];
//        $response = $this->post($uri, $params);
//        return $response;
//    }

//    public function getThemeSourceDistribution($themeName, $dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
//    {
//        $uri = self::THEME_SOURCE_DISTRIBUTION;
//        $params = [
//            'theme_name' => $themeName,
//            'date_type' => $dateType,
//            'begin_date' => $beginDate,
//            'end_date' => $endDate
//        ];
//        $response = $this->post($uri, $params);
//        return $response;
//    }

//    public function getThemeTopSites($themeName, $dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
//    {
//        $uri = self::THEME_TOP_SITES;
//        $params = [
//            'theme_name' => $themeName,
//            'date_type' => $dateType,
//            'begin_date' => $beginDate,
//            'end_date' => $endDate
//        ];
//        $response = $this->post($uri, $params);
//        return $response;
//
//    }
//
//    public function getBroadcastPath($themeName, $url)
//    {
//        $uri = self::THEME_Broadcast_Path;
//        $params = [
//            'theme_name' => $themeName,
//            'url' => $url,
//        ];
//        $response = $this->post($uri, $params);
//        return $response;
//
//    }
//
//    public function getThemeHotNews($themeName, $dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
//    {
//        $uri = self::THEME_HOT_NEWS;
//        $params = [
//            'theme_name' => $themeName,
//            'date_type' => $dateType,
//            'begin_date' => $beginDate,
//            'end_date' => $endDate
//        ];
//        $response = $this->post($uri, $params);
//        return $response;
//
//    }

//    public function getThemeHotWords($themeName, $dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
//    {
//        $uri = self::THEME_HOT_WORDS;
//        $params = [
//            'theme_name' => $themeName,
//            'date_type' => $dateType,
//            'begin_date' => $beginDate,
//            'end_date' => $endDate
//        ];
//        $response = $this->post($uri, $params);
//        return $response;
//    }
//
//    public function getThemeAttributeTrend($themeName, $dateType=7, $beginDate='2018-01-01', $endDate='2018-02-01')
//    {
//        $uri = self::THEME_Attribute_Trend;
//        $params = [
//            'theme_name' => $themeName,
//            'date_type' => $dateType,
//            'begin_date' => $beginDate,
//            'end_date' => $endDate
//        ];
//        $response = $this->post($uri, $params);
//        return $response;
//
//    }

}