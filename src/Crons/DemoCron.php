<?php
namespace Zwei\RabbitMqEventApp\Crons;

/**
 * 演示计划任务
 * Class DemoCron
 * @package Zwei\RabbitMqEventApp\Crons
 */
class DemoCron
{
    public function run() {
        $class = __CLASS__;
        $method = __METHOD__;
        echo <<<str

run cron
class: $class
method: $method

str;

    }
}