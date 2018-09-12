<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/12
 * Time: 上午9:48
 */
require_once __DIR__ . '/../config.php';
use SOpenApi\BaseApiClient;

class SSOClient extends BaseApiClient
{
    const SSO_URL = SOPENAPI_BASE_URL . '/openapi/yuqing/authorizeLogin';

    /**
     * 第三方应用免登陆接口
     * @return mixed
     * User: shijie
     * 2018/9/12 下午2:34
     */
    public function authorizeLogin()
    {
        $uri = self::SSO_URL;
        $params = [
            'username' => 'admin04',
            'redirect_page' => 'big_screen'
        ];
        $response = $this->get($uri, $params);
        return $response;
    }

}