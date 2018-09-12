<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/12
 * Time: 下午2:15
 */
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/user/StatisticsClient.php';

$userStatisticClient = new StatisticsClient($soClient);
$params = [
    'date_type' => 7
];
echo "list user region distribution with date_type : {$params['date_type']}" . PHP_EOL;
$response = $userStatisticClient->getUserRegionDistribution($params['date_type'], '', '');
print_r($response);