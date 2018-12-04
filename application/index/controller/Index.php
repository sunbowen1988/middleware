<?php
/**
 *@author sunbowen
 *@controllername 控制器类
 */

namespace app\index\controller;

use app\index\model\User;
use think\Db;
use think\Controller;

class Index extends Controller
{
    public function index(){
         $data = [];
         $data['name'] = 'mrml';
         $data['age'] = 21;
         $data['sex'] = '1';
         return outjson(200,'操作成功',$data);
    }

    public function call(){

       //$user = User::tablename();
         $user = new User;
         $users = $user->tablename();
         return $users;
    }

    public function jsonsequence(){
    	//return 1; exit;
    	$user = User::tablename(1);
    	return $this->toJson($user);
    }
}
