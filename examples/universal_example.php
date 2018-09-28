<?php


require_once __DIR__ . '/config.php';
require_once __DIR__ . '/universal/SentimentClient.php';

$sentimentClient = new SentimentClient($soClient);
$params = [
    'keyword' => '南京',
    'type' => 'all',
    'attribute' => 'all',
    'page' => 1,
    'page_count' => 15
];
echo "list sentiments keyword : {$params['keyword']} type : {$params['type']} attribute : {$params['attribute']}" .
" page : {$params['page']} page count : {$params['page_count']}";
$response = $sentimentClient->getSentimentList($params['keyword'], $params['type'], $params['attribute'],
    $params['page'], $params['page_count']);
print_r($response['body']);