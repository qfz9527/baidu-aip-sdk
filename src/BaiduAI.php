<?php
/**
 * User: qbhy
 * Date: 2019-01-15
 * Time: 19:11
 */

namespace Qbhy\BaiduAI;

use Hanson\Foundation\Foundation;

/**
 * Class BaiduAI
 *
 * @property Api         $api
 * @property AccessToken $access_token
 *
 * @package Qbhy\BaiduAI
 */
class BaiduAI extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
    ];
}