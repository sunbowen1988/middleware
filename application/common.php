<?php
/**
 *@author bowen sun
 * 文档显示
 */

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
   return json_encode($result,JSON_UNESCAPED_UNICODE);
}