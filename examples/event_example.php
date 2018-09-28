<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/28
 * Time: 下午2:13
 */
require_once __DIR__ . '/event/EventStatisticClient.php';

$sentimentClient = new EventStatisticClient($soClient);

//echo "list getEventRegionDistribution result eventId {$eventId}" . PHP_EOL;
//$response = $sentimentClient->getEventRegionDistribution($eventId);
//print_r($response['body']);

echo "list getEventSourceDistribution result eventId {$eventId}" . PHP_EOL;
$response = $sentimentClient->getEventSourceDistribution($eventId);
print_r($response['body']);

//echo "list getEventTopSite result eventId {$eventId}" . PHP_EOL;
//$response = $sentimentClient->getEventTopSite($eventId);
//print_r($response['body']);
//
//echo "list getEventAttributeCount result eventId {$eventId}" . PHP_EOL;
//$response = $sentimentClient->getEventAttributeCount($eventId);
//print_r($response['body']);
//
//echo "list getEventBroadcastPath result eventId {$eventId}" . PHP_EOL;
//$response = $sentimentClient->getEventBroadcastPath($eventId);
//print_r($response['body']);
//
//echo "list getEventFirstPublishedMedia result eventId {$eventId}" . PHP_EOL;
//$response = $sentimentClient->getEventFirstPublishedMedia($eventId);
//print_r($response['body']);

