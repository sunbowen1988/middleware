<?php
/**
 *@author sunbowen
 */

namespace DawnApi\route;

use  think\App;
use think\Route;
use think\Request;
use  dawnapi\controller\Wiki;

class DawnRoute
{

    public static function wiki()
    {
        $pathInfo = Request::instance()->pathinfo();

        if (false === stripos($pathInfo, 'wiki')) {
            // 请求方式非法 则用默认请求方法
            return;
        }
        Route::any('wiki/apiInfo', function () {
            $controller = new Wiki();
            return App::invokeMethod([$controller, 'apiInfo']);
        });
        Route::any('wiki', function () {
            $controller = new Wiki();
            return App::invokeMethod([$controller, 'index']);
        });

    }
}