<?php
namespace Zwei\RabbitMqEventApp\Queues\Standards;

use Zwei\RabbitMqEvent\Queue\CallbackResult;
use Zwei\RabbitMqEvent\Queue\Code;

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
     * @return CallbackResult
     */
    public static function register($message) {
        print_r($message);
        $return = new CallbackResult(Code::SUCCESS, $message, "成功");
        return $return;
    }
}