<?php
// +----------------------------------------------------------------------
// | When work is a pleasure, life is a joy!
// +----------------------------------------------------------------------
// +----------------------------------------------------------------------
// | TITLE: 测试的基础验证
// +----------------------------------------------------------------------
namespace app\index\auth;

use dawnapi\src\auth\Basic;
use think\Request;

class BasicAuth extends Basic
{


    /**
     * 获取用户信息后 验证权限,
     * @param Request $request
     * @return bool
     */
    public function certification(Request $request)
    {
        return 1;exit;
        return  ($this->username == 'test' && $this->password == 'test') ? true : false;
    }

    /**
     * 获取用户信息
     * @return mixed
     */
    public function getUser()
    {
        // TODO: Implement getUser() method.
    }


}