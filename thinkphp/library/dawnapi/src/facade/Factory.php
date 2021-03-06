<?php
/**
 *@author sunbowen
 *工厂类
 */

namespace DawnApi\facade;

class Factory
{

    private static $Factory;

    private function __construct()
    {
    }

    public static function getInstance($className, $options = null)
    {
        if (!isset(self::$Factory[$className]) || !self::$Factory[$className]) {
            self::$Factory[$className] = new $className($options);
        }
        return self::$Factory[$className];
    }
}