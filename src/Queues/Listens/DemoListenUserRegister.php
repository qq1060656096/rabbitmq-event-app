<?php
namespace Zwei\RabbitMqEventApp\Queues\Listens;

use Zwei\RabbitMqEvent\Queue\CallbackResult;

/**
 * 监听用户注册
 * Class DemoListenUserRegister
 * @package Zwei\RabbitMqEventApp\Queues\Listens
 */
class DemoListenUserRegister {

    /**
     * 监听用户注册
     *
     * @param array $message
     * @return CallbackResult
     */
    public static function listRegister($message) {

        $return = new CallbackResult(Code::SUCCESS, $message, "成功");
        return $return;
    }
}