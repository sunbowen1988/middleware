<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: sunbowen
// +----------------------------------------------------------------------


// 应用公共文件
/**
 *json数据格式输出
 *@return param array $data
 *@return param int $code
 *@return param string $message
 */

function outjson($code, $message = '', $data = []){
   $result = [];
   $result['code'] = $code;
   $result['message'] = $message;
   $result['data'] = $data;
   header('Content-Type:application/json;charset=utf-8');
   return json_encode($result);
}