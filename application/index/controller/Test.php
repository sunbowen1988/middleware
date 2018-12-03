<?php
namespace app\index\controller;

use think\Request;

Class Test{
	public function index(){
      return 1; exit;
         $request = Request::instance();
          // 是否为 GET 请求
         if (Request::instance()->isGet()) echo "当前为 GET 请求";
         // 是否为 POST 请求
         if (Request::instance()->isPost()) echo "当前为 POST 请求";
         // 是否为 PUT 请求
         if (Request::instance()->isPut()) echo "当前为 PUT 请求";
         // 是否为 DELETE 请求
         if (Request::instance()->isDelete()) echo "当前为 DELETE 请求";
         // 是否为 Patch 请求
         if (Request::instance()->isPatch()) echo "当前为 PATCH 请求";
      }
   }
	