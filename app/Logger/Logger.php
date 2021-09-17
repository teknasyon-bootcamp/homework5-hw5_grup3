<?php

namespace App\Logger;

use App\DB\Engine\DriverInterface;
use App\Logger\Driver\LogDriverInterface;

class Logger implements LoggableInterface
{

    protected DriverInterface $logDriver;

    public function __construct(DriverInterface $LogDriver)
    {
        $this->LogDriver = $LogDriver;
    }

    protected function setDriver(DriverInterface $LogDriver): void{
        $this->LogDriver = $LogDriver;
    }

    public function log(string $message, string $level): void
    {

    }
}
