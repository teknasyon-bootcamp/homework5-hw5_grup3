<?php

namespace App\Logger;

interface LoggableInterface
{
    public function log(string $message, int $level): void;

}