<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
       $data = array(
             'key' => 'value'          
          );
         $code = 200;
         $msg = 'ok';
         return json_encode(['data' => $data, 'code' => $code, 'message' => $msg]);
    }
}
