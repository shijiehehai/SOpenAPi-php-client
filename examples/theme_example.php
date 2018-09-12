<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/12
 * Time: 上午10:28
 */
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/theme/ThemeStatisticClient.php';

$themeStatisticClient = new ThemeStatisticClient($soClient);
$params = [
    'theme_name' => 'sdf',
    'date_type' => 30
];
echo "list theme attribute info theme_name : {$params['theme_name']} date_type : {$params['date_type']}" . PHP_EOL;
$response = $themeStatisticClient->getThemeAttributeInfo($params['theme_name'], $params['date_type']);

print_r($response);