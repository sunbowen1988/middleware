<?php
namespace app\index\controller;

use app\index\model\User;
use think\Db;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
         $data = [];
         $data['name'] = 'mrml';
         $data['age'] = 21;
         $data['sex'] = '1';
         return json($data,200,'操作成功');
    }

    public function call(){

       $user = User::tablename();
       //$users = $user->tablename();
       return $user;
    }
}
