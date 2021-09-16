<<<<<<< HEAD
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

    public function log(string $message, int $level): void
    {

    }
}
=======
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
>>>>>>> b086dbe8222bbdf99e7c3096262a2fb851c9b621
