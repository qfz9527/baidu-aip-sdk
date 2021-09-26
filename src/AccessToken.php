<?php
/**
 * User: qbhy
 * Date: 2019-01-15
 * Time: 20:17
 */

namespace Qbhy\BaiduAIP;

use GuzzleHttp\Exception\BadResponseException;
use Hanson\Foundation\AbstractAccessToken;

/**
 * Class AccessToken
 *
 * @author  qbhy <96qbhy@gmail.com>
 *
 * @property-read BaiduAIP app
 *
 * @package Qbhy\BaiduAIP
 */
class AccessToken extends AbstractAccessToken
{

    protected $tokenJsonKey = 'access_token';

    protected $expiresJsonKey = 'expires_in';

    protected $scope;

    public function getHttp()
    {
        return $this->app->http;
    }

    /**
     * @return string
     * @throws Exceptions\UndefinedApplicationConfigurationException
     */
    public function getCacheKey()
    {
        return $this->app->getAppId();
    }

    const URL = 'https://aip.baidubce.com/oauth/2.0/token';

    /**
     * @return mixed
     * @throws Exceptions\UndefinedApplicationConfigurationException
     * @throws \Hanson\Foundation\Exception\HttpException
     */
    public function getTokenFromServer()
    {
        $response = @json_decode($this->getHttp()->get(AccessToken::URL, [
            'grant_type'    => 'client_credentials',
            'client_id'     => $this->app->getApiKey(),
            'client_secret' => $this->app->getSecretKey(),
        ])->getBody()->__toString(), true);

        if (isset($response['scope'])) {
            $this->setScope($response['scope'], $response[$this->expiresJsonKey]);
        }

        return $response;
    }

    /**
     * @param $scope
     * @param $expires
     *
     * @throws Exceptions\UndefinedApplicationConfigurationException
     */
    public function setScope($scope, $expires)
    {
        $this->scope = $scope;
        $this->getCache()->save($this->app->getAppId() . '_scope', $scope, $expires);
    }

    /**
     * @return string
     */
    public function getScope()
    {
        if (is_null($this->scope)) {
            $this->getToken(true);
        }

        return $this->scope;
    }

    public function getToken($forceRefresh = false)
    {
        return parent::getToken($forceRefresh); // TODO: Change the autogenerated stub
    }

    public function checkTokenResponse($result)
    {

    }

}