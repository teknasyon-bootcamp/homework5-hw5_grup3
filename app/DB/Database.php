<?php

namespace App\DB;


use App\DB\Engine\DriverInterface;

class Database
{
    protected object $driver;

    public function setDriver(DriverInterface $driver): void {

    }
    public function all(string $table): array{

    }
    public function find(string $table, mixed $id):mixed{

    }
    public function create(string $table, array $values): bool{

    }
    public function update(string $table, mixed $id, array $values): bool{

    }
    public function delete(string $table, mixed $id): bool{

    }


}