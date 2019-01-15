<?php
/**
 * User: qbhy
 * Date: 2019-01-15
 * Time: 19:14
 */

namespace Qbhy\BaiduAI;

use Hanson\Foundation\AbstractAPI;

class Api extends AbstractAPI
{
    protected $app;

    public function __construct(BaiduAI $baidu)
    {
        $this->app = $baidu;
    }

    public function request($url, $data, $headers = [])
    {
//        try {
//            $params  = array();
//
//            $authObj = $this->auth();
//
//            if ($this->isCloudUser === false) {
//                $params['access_token'] = $authObj['access_token'];
//            }
//
//            // 特殊处理
//            $this->proccessRequest($url, $params, $data, $headers);
//
//            $headers  = $this->getAuthHeaders('POST', $url, $params, $headers);
//            $response = $this->client->post($url, $data, $params, $headers);
//
//            $obj = $this->proccessResult($response['content']);
//
//            if (!$this->isCloudUser && isset($obj['error_code']) && $obj['error_code'] == 110) {
//                $authObj                = $this->auth(true);
//                $params['access_token'] = $authObj['access_token'];
//                $response               = $this->client->post($url, $data, $params, $headers);
//                $obj                    = $this->proccessResult($response['content']);
//            }
//
//            if (empty($obj) || !isset($obj['error_code'])) {
//                $this->writeAuthObj($authObj);
//            }
//        } catch (Exception $e) {
//            return array(
//                'error_code' => 'SDK108',
//                'error_msg'  => 'connection or read data timeout',
//            );
//        }
    }

}