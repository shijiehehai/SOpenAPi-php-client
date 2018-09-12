<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/12
 * Time: 上午10:04
 */
require_once __DIR__ . '/../config.php';
use SOpenApi\BaseApiClient;

class SentimentClient extends BaseApiClient
{
    const FETCH_SENTIMENT_URL = SOPENAPI_BASE_URL . '/openapi/yuqing/getYqList';

    /**
     * 根据关键词获取舆情列表接口
     * @param $keyword 关键词
     * @param string $type
     * @param string $attribute
     * @param int $page
     * @param int $pageCount
     * @return mixed
     * User: shijie
     * 2018/9/12 下午2:34
     */
    public function getSentimentList($keyword, $type='all', $attribute='all', $page=1, $pageCount=10)
    {
        $uri = self::FETCH_SENTIMENT_URL;
        $params = [
            'keyword' => $keyword,
            'type' => $type,
            'attribute' => $attribute,
            'page' => $page,
            'page_count' => $pageCount
        ];
        $response = $this->post($uri, $params);
        return $response;
    }
}