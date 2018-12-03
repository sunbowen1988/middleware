<?php
namespace app\index\controller;

use think\Db;

class Link{
	 public function index(){
	 return 1;exit;     
         $res = Db::query('select version()');
         return $res;
     }
}