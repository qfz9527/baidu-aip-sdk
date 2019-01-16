<?php
/**
 * User: qbhy
 * Date: 2019-01-15
 * Time: 19:12
 */

namespace Qbhy\BaiduAIP;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['image_censor'] = function (BaiduAIP $baidu) {
            return new ImageCensor($baidu);
        };

        $pimple['access_token'] = function (BaiduAIP $baidu) {
            return new AccessToken($baidu);
        };
    }

}