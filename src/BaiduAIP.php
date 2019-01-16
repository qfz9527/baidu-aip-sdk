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
 * @property ImageCensor   $image_censor   图像审核、内容审核
 * @property ImageClassify $image_classify 图像识别
 * @property ImageSearch   $image_search   图像搜索
 * @property BodyAnalysis  $body_analysis  人体分析
 * @property Speech        $speech         百度语音
 * @property Face          $face           人脸识别
 * @property AccessToken   $access_token
 *
 * @package Qbhy\BaiduAI
 */
class BaiduAIP extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
    ];
}