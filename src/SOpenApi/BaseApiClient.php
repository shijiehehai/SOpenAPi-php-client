<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/12
 * Time: 上午9:39
 */

namespace SOpenApi;

class BaseApiClient
{
    private $client;

    public function __construct($client) {
        $this->client = Http::sharedHttp($client);
    }

    public function get($uri, array $query = []) {
        return $this->client->get($uri, $query);
    }

    public function post($uri, array $body = []) {
        return $this->client->post($uri, $body);
    }

    protected function getClient() {
        return $this->client;
    }
}