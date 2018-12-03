<?php
namespace app\exception;

use think\Exception;
use think\exception\Handle;

class Z_Exeption extends Handle{
	private $code;
	private $msg;
	private $errorcode;

	public function render(Exception $e){
      if($e instanceof BaseException){
           $this->code = $e->code;
           $this->msg = $e->msg;
           $this->errorcode  = $e->errorcode; 
      }else{
      	   $this->code  =500;
           $this->msg   ='服务器内部错误';
           $this->errorcode = 900;
      }    
           $request = Exception::instance();  
	}
}