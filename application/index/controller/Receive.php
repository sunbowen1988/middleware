 <?php
  namespace app\index\controller;
  use think\Request;
  class Receive{
      public function index(){
        return 1;exit;
          $request = Request::instance();
          echo "请求方法：'<br>'" . $request->method();
          echo '访问地址：' . $request->ip();
          echo '请求参数：';
          dump($request->param());
          echo '请求参数：仅包含name,sex';
          dump($request->only(['name', 'sex']));
          echo '请求参数：排除name,sex';
          dump($request->except(['name', 'sex']));
     }
 }