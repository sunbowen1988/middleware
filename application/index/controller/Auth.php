<?php
/**
 *@author bowen sun
 *Oauth客户端模式
 */

namespace app\index\controller;


use app\index\auth\OauthAuth;
use think\Request;

class Auth
{
    public function accessToken()
    {
    	return 2;exit;
        $request = Request::instance();
        $OauthAuth = new OauthAuth();
        return $OauthAuth->accessToken($request);
    }

}