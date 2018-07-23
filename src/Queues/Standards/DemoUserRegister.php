<?php
namespace Zwei\RabbitMqEventApp\Queues\Standards;

/**
 * 测试用户注册事件
 * Class DemoUserRegister
 * @package Zwei\RabbitMqEventApp\Queues\Standards
 */
class DemoUserRegister {

    /**
     * 用户注册
     *
     * @param array 事件内容
     *
     */
    public static function register($message) {
        $return = [];
        return $return;
    }
}