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
     * @param $userName
     * @param string $redirectPage
     * @return mixed
     * User: shijie
     * 2018/9/13 下午2:28
     *
     */
    public function authorizeLogin($userName, $redirectPage='main')
    {
        $uri = self::SSO_URL;
        $params = [
            'username' => $userName,
            'redirect_page' => $redirectPage
        ];
        $response = $this->get($uri, $params);
        return $response;
    }

}