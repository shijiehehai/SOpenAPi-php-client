<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/11
 * Time: 下午7:11
 */

namespace SOpenApi;


class SOpenApiClient
{
    private $_appKey;
    private $_secureKey;

    public function __construct($appKey, $secureKey)
    {
        $this->_appKey = $appKey;
        $this->_secureKey = $secureKey;
    }

    public function generateSignature()
    {
        $requestTime = time();
        $dateSignature = hash_hmac('sha256', $requestTime , $this->_secureKey);
        $signature = hash_hmac('sha256', $this->_appKey, $dateSignature);
        return "authorization:{$this->_appKey}/{$requestTime}/{$signature}";
    }
}