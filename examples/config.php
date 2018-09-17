<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/12
 * Time: 上午9:46
 */
require __DIR__ . '/../autoload.php';
//define('SOPENAPI_BASE_URL', 'https://10.154.3.85/apps_laravel');
define('SOPENAPI_BASE_URL', 'https://info.bigcloudsys.cn');
//define('SOPENAPI_BASE_URL', 'http://10.144.76.60:8888/apps_laravel_test');

use SOpenApi\SOpenApiClient;

$appKey = 'YF2GbUBE8Z7ZRsQJ';        //此处填写实际的appKey
$secureKey = 'SicwvILwp0nlf2Fv4rT7pblamsLtf3rA';  //此处填写实际的secureKey
$userName = 'jasce020';
$themeName = '休斯顿火箭队';

$soClient = new SOpenApiClient($appKey, $secureKey);