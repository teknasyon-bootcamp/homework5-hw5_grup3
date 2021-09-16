<?php

namespace App\Logger;

use App\DB\Engine\DriverInterface;
use App\Logger\Driver\LogDriverInterface;

class Logger implements LogDriverInterface
{
    protected DriverInterface $LogDriver;

    public function __construct(DriverInterface $LogDriver)
    {

    }

    protected function setDriver(DriverInterface $LogDriver): void{

    }

    public function log(string $message, int $level): void
    {

    }
}