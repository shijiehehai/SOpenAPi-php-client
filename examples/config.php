<?php
require __DIR__ . '/../autoload.php';
define('SOPENAPI_BASE_URL', 'http://10.144.76.60:8888/apps_laravel_test');


use SOpenApi\SOpenApiClient;



//shijie配置
$appKey = 'YF2GbUBE8Z7ZRsQJ';        //此处填写实际的appKey
$secureKey = 'SicwvILwp0nlf2Fv4rT7pblamsLtf3rA';  //此处填写实际的secureKey
$userName = 'shijie';    //此处填写实际的用户名
$themeName = '休斯顿火箭队';  //此处填写实际的专题名
$eventId = 11;

$soClient = new SOpenApiClient($appKey, $secureKey);