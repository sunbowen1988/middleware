<?php
namespace app\lib\exception;

use think\Exeption;

class BaseException extends Exception{
	 /**
      定义公共属性其中包括错误抛出异常 的http状态码 ，自定义的错误码
	  */ 

	  public $ode = 400;
	  public $msg = '参数错误';
	  public $errcode = 1000;
}