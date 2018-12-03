<?php
namespace app\index\controller;

use think\Validate;

class Verify{
    public function index(){
    	 $rule = [
             //utf-8 一个字符对应3个字母/数字 对应2个汉字(所以这里可以入3个字母/数字或者一个汉字)
              'name' => 'require|max:3',
              'age' => 'number|between:1,120',
              'email' => 'email',
         ];
         $msg = [
             'name.require' => '名称必须',
             'name.max' => '名称最多不能超过3个字符',
             'age.number' => '年龄必须是数字',
             'age.between' => '年龄只能在1-120之间',
             'email' => '邮箱格式错误',
         ];
         $data = input('post.');
         $validate = new Validate($rule, $msg);
         $result = $validate->check($data);
         if (!$result) {
             dump($validate->getError());
         }
    }
}