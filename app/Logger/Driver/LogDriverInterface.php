<?php

namespace App\Logger\Driver;

interface LogDriverInterface
{
    public function setUp():void;
    public function log(string $message, int $level):void;
    public function tearDown():void;
}