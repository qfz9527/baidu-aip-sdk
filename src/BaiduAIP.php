<?php
/**
 * User: qbhy
 * Date: 2019-01-15
 * Time: 19:11
 */

namespace Qbhy\BaiduAIP;

use Hanson\Foundation\Foundation;

/**
 * Class BaiduAI
 *
 * @property ImageCensor $image_censor
 * @property Speech      $speech
 * @property AccessToken $access_token
 *
 * @package Qbhy\BaiduAI
 */
class BaiduAIP extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
    ];
}