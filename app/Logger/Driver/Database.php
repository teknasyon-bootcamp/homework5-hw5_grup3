<?php

namespace App\Logger\Driver;

use App\DB\Engine\DriverInterface;

class Database implements LogDriverInterface
{
    public function __construct(DriverInterface $driver)
    {
    }
    public function setDriver(DriverInterface $driver):void{

    }

    public function setUp(): void
    {
        // TODO: Implement setUp() method.
    }

    public function log(string $message, int $level): void
    {
        // TODO: Implement log() method.
    }

    public function tearDown(): void
    {
        // TODO: Implement tearDown() method.
    }
}