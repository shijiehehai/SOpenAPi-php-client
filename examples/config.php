<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/12
 * Time: 上午9:46
 */
require __DIR__ . '/../autoload.php';
define('SOPENAPI_BASE_URL', 'https://info.bigcloudsys.cn');

use SOpenApi\SOpenApiClient;

$appKey = 'testKey';        //此处填写实际的appKey
$secureKey = 'testSecret';  //此处填写实际的secureKey

$soClient = new SOpenApiClient($appKey, $secureKey);