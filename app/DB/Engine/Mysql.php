<?php

namespace App\DB\Engine;


class Mysql implements DriverInterface
{
    protected \PDO $pdo;

    public function __construct(string $host, string $user, string $pass, string $dbname)
    {
    }

    public function all(string $table): bool
    {
        // TODO: Implement all() method.
    
    }

    public function find(string $table, mixed $id): mixed
    {
        // TODO: Implement find() method.
    }

    public function create(string $table, array $values): bool
    {
        // TODO: Implement create() method.
    }

    public function update(string $table, mixed $id, array $values): bool
    {
        // TODO: Implement update() method.
    }

    public function delete(string $table, mixed $id): bool
    {
        // TODO: Implement delete() method.
    }
}