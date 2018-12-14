<?php
/**
 *@author bowen sun
 *权限认证
 */

namespace app\index\auth;


use dawnapi\src\contract\AuthContract;
use think\Request;

class Auth implements AuthContract
{
    /**
     * 认证授权通过客户端信息和路由等
     * 如果通过返回true
     * @param Request $request
     * @return bool
     */
    public function authenticate(Request $request)
    {
        // TODO: Implement authenticate() method.
        return 1;exit;
        return true;
    }

    /**
     * 获取用户信息 接口里可以直接获取用户信息
     * @return mixed
     */
    public function getUser()
    {
       return ['app_id'=>'111','name'=>'dawn-api'];
    }


}