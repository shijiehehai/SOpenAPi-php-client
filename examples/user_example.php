<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/12
 * Time: 下午2:15
 */
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/user/StatisticsClient.php';
require_once __DIR__ . '/sso/SSOClient.php';

$userStatisticClient = new StatisticsClient($soClient);
$dateType = 0;
$beginDate = '2018-09-06';
$endDate = '2018-09-13';

echo "list user region distribution with date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $userStatisticClient->getUserRegionDistribution(7, '', '');
print_r($response['body']);

echo "list user source distribution with date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $userStatisticClient->getUserSourceDistribution(7, '', '');
print_r($response['body']);


echo "list user top sites with date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $userStatisticClient->getUserTopSites(7, '', '');
print_r($response['body']);


echo "list user attribute count with date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $userStatisticClient->getUserAttributeCount(7, '', '');
print_r($response['body']);


echo "list user attribute distribution with date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $userStatisticClient->getUserAttributeDistribution(7, '', '');
print_r($response['body']);


echo "list user hot words with date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $userStatisticClient->getUserHotWords(7, '', '');
print_r($response['body']);


echo "list user hot news with date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $userStatisticClient->getUserHotNews(7, '', '');
print_r($response['body']);


echo "list user attribute trend with date_type : {$dateType} begin_date : {$beginDate} end_date : {$endDate}" . PHP_EOL;
$response = $userStatisticClient->getUserAttributeTrend(7, '', '');
print_r($response['body']);


$ssoClient = new SSOClient($soClient);

echo "sso authorizeLogin with username : {$userName} redirect page : big_screen" . PHP_EOL;
$response = $ssoClient->authorizeLogin($userName, 'big_screen');
print_r($response['body']);

