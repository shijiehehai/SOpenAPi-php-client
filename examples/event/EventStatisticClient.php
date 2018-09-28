<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/12
 * Time: 上午10:00
 */
require_once __DIR__ . '/../config.php';
use SOpenApi\BaseApiClient;

class EventStatisticClient extends BaseApiClient
{
    const getEventRegionDistributionUrl = SOPENAPI_BASE_URL . '/openapi/yuqing/getEventRegionDistribution';
    const getEventSourceDistributionUrl = SOPENAPI_BASE_URL . '/openapi/yuqing/getEventSourceDistribution';
    const getEventTopSiteUrl = SOPENAPI_BASE_URL . '/openapi/yuqing/getEventTopSite';
    const getEventAttributeCountUrl = SOPENAPI_BASE_URL . '/openapi/yuqing/getEventAttributeCount';
    const getEventBroadcastPathUrl = SOPENAPI_BASE_URL . '/openapi/yuqing/getEventBroadcastPath';
    const getEventFirstPublishedMediaUrl = SOPENAPI_BASE_URL . '/openapi/yuqing/getEventFirstPublishedMedia';


    public function getEventRegionDistribution($eventId)
    {
        $params = [
            'id' => $eventId,
        ];
        $response = $this->post(self::getEventRegionDistributionUrl, $params);
        echo self::getEventRegionDistributionUrl . PHP_EOL;
        return $response;
    }

    public function getEventSourceDistribution($eventId)
    {
        $params = [
            'id' => $eventId,
        ];
        $response = $this->post(self::getEventSourceDistributionUrl, $params);
        return $response;

    }

    public function getEventTopSite($eventId)
    {
        $params = [
            'id' => $eventId,
        ];
        $response = $this->post(self::getEventTopSiteUrl, $params);
        return $response;

    }

    public function getEventAttributeCount($eventId)
    {
        $params = [
            'id' => $eventId,
        ];
        $response = $this->post(self::getEventAttributeCountUrl, $params);
        return $response;

    }

    public function getEventBroadcastPath($eventId)
    {
        $params = [
            'id' => $eventId,
        ];
        $response = $this->post(self::getEventBroadcastPathUrl, $params);
        return $response;

    }

    public function getEventFirstPublishedMedia($eventId)
    {
        $params = [
            'id' => $eventId,
        ];
        $response = $this->post(self::getEventFirstPublishedMediaUrl, $params);
        return $response;
    }
}