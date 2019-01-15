<?php
/**
 * User: qbhy
 * Date: 2019-01-15
 * Time: 19:12
 */

namespace Qbhy\BaiduAI;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['api'] = function (BaiduAI $baidu) {
            return new Api($baidu);
        };

        $pimple['access_token'] = function (BaiduAI $baidu) {
            return new AccessToken($baidu);
        };
    }

}