<?php
/**
 *@author bowen sun
 *业务基础类
 */

namespace app\index\controller;


use dawnapi\src\facade\Api;
class Base extends Api
{

    /**
     * 允许访问的请求类型
     * @var string
     */
    public $restMethodList = 'get|post|put|delete|patch|head|options';

    //是否开启授权认证
    public    $apiAuth = true;



}