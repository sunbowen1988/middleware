<?php
namespace app\index\controller;

use think\Request;

class Exception {
public function banner_details(){
	return 1; exit;
	$resquest = Request::instance();
	$id = $request->param();
	// var_dump();exit;
	if(empty($id)){
		throw new Exception('参数错误');
	}
  }
}