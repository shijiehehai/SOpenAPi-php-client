<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/theme/ThemeStatisticClient.php';

$themeStatisticClient = new ThemeStatisticClient($soClient);
$dateType = 0;
$beginDate = '2018-08-01';
$endDate = '2018-08-31';
$url = "http://www.scqcgx.com/clss/20180913/185329.html";


echo "list theme attribute info theme_name : {$themeName} date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $themeStatisticClient->getThemeAttributeInfo($themeName, $dateType, $beginDate, $endDate);

print_r($response['body']);

echo "list theme yq list theme_name : {$themeName} date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $themeStatisticClient->getThemeYqList($themeName);

print_r($response['body']);

echo "list theme Region Distribution theme_name : {$themeName} date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $themeStatisticClient->getThemerRegionDistribution($themeName, $dateType, $beginDate, $endDate);

print_r($response['body']);


echo "list theme Source Distribution theme_name : {$themeName} date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $themeStatisticClient->getThemeSourceDistribution($themeName, $dateType, $beginDate, $endDate);

print_r($response['body']);

echo "list theme Top Sites  theme_name : {$themeName} date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $themeStatisticClient->getThemeTopSites($themeName, $dateType, $beginDate, $endDate);

print_r($response['body']);

echo "list theme Hot News theme_name : {$themeName} date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $themeStatisticClient->getThemeHotNews($themeName, $dateType, $beginDate, $endDate);

print_r($response['body']);


echo "list theme Hot Words theme_name : {$themeName} date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $themeStatisticClient->getThemeHotWords($themeName, $dateType, $beginDate, $endDate);

print_r($response['body']);


echo "list theme Attribute Trend theme_name : {$themeName} date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $themeStatisticClient->getThemeAttributeTrend($themeName, $dateType, $beginDate, $endDate);

print_r($response['body']);


echo "list theme Broadcast Path theme_name : {$themeName} url : {$url}" . PHP_EOL;
$response = $themeStatisticClient->getBroadcastPath($themeName, $url);

print_r($response['body']);