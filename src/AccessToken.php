<?php
/**
 * User: qbhy
 * Date: 2019-01-15
 * Time: 20:17
 */

namespace Qbhy\BaiduAI;


use GuzzleHttp\Exception\BadResponseException;
use Hanson\Foundation\AbstractAccessToken;

class AccessToken extends AbstractAccessToken
{

    protected $tokenJsonKey = 'access_token';

    protected $expiresJsonKey = 'expires_in';

    protected $app;

    public function __construct(BaiduAI $app)
    {
        $this->app = $app;
    }

    const URL = 'https://aip.baidubce.com/oauth/2.0/token';

    /**
     * @return array
     * @throws \Hanson\Foundation\Exception\HttpException
     */
    public function getTokenFromServer()
    {
        try {
            return @json_decode($this->getHttp()->get(AccessToken::URL, [
                'grant_type'    => 'client_credentials',
                'client_id'     => $this->app->getConfig('api_key'),
                'client_secret' => $this->app->getConfig('secret_key'),
            ])->getBody()->__toString(), true);
        } catch (BadResponseException $badResponseException) {
            return @json_decode($badResponseException->getResponse()->getBody()->__toString(), true);
        }
    }

    public function checkTokenResponse($result)
    {

    }

}