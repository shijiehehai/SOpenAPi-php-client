<?php
/**
 * Created by PhpStorm.
 * User: shijie
 * Date: 2018/9/11
 * Time: 下午7:24
 */

namespace SOpenApi;

class Http
{
    private $_client;
    private static $_instance = null;

    public function get($uri, array $query = []) {
        if (!empty($query)) {
            $query = array_filter($query);
            $uri = $uri . '?' . http_build_query($query);
        }
        return self::request($this->_client, 'GET', $uri);
    }

    public function post($uri, array $body = []) {
        $body = array_filter($body);
        return self::request($this->_client, 'POST', $uri, $body);
    }

    public function upload($uri, array $body = []) {
        $headers = [
            'Content-Type: multipart/form-data',
            'Connection: Keep-Alive'
        ];
        return self::request($this->client, 'UPLOAD', $uri, $body, $headers);
    }

    public static function sharedHttp($client)
    {
        if (is_null(self::$_instance) || !(self::$_instance instanceof self)) {
            self::$_instance = new self($client);
        }
        return self::$_instance;
    }

    public function __construct($client)
    {
        $this->_client = $client;
    }

    private static function request($client, $method, $uri, array $body = [], array $headers = []) {
        $method = strtoupper($method);
        if (empty($headers)) {
            $headers = [$client->generateSignature()];
        } else {
            $headers = array_merge($headers, [$client->generateSignature()]);
        }
        $ch = curl_init();
        $options = [
            CURLOPT_HEADER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_USERAGENT => 'SOpen-Api-PHP-Client',
            CURLOPT_CONNECTTIMEOUT => 20,
            CURLOPT_TIMEOUT => 120,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_NOSIGNAL => 1,
            CURLOPT_REFERER => '',
            CURLOPT_URL => $uri,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ];

        if (!empty($body)) {
            if ('UPLOAD' == $method) {
                if (class_exists('\CURLFile')) {
                    $options[CURLOPT_SAFE_UPLOAD] = true;
                    $options[CURLOPT_POSTFIELDS] = ['filename' => new \CURLFile($body['path'])];
                } else {
                    if (defined('CURLOPT_SAFE_UPLOAD')) {
                        $options[CURLOPT_SAFE_UPLOAD] = false;
                    }
                    $options[CURLOPT_POSTFIELDS] = ['filename' => '@' . $body['path']];
                }
            } else {
                $options[CURLOPT_POSTFIELDS] = http_build_query($body);
            }
        }

        curl_setopt_array($ch, $options);
        $output = curl_exec($ch);


        if($output === false) {
            return "Error Code:" . curl_errno($ch) . ", Error Message:".curl_error($ch);
        } else {
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $header_text = substr($output, 0, $header_size);
            $body = substr($output, $header_size);
            $headers = array();
            foreach (explode("\r\n", $header_text) as $i => $line) {
                if (!empty($line)) {
                    if ($i === 0) {
                        $headers[0] = $line;
                    } else if (strpos($line, ": ")) {
                        list ($key, $value) = explode(': ', $line);
                        $headers[$key] = $value;
                    }
                }
            }
            $response['headers'] = $headers;
            $response['body'] = json_decode($body, true);
            $response['http_code'] = $httpCode;
        }
        curl_close($ch);
        return $response;
    }
}