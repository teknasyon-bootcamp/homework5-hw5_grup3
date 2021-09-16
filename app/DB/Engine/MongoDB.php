<?php

namespace App\DB\Engine;

use MongoDB\BSON\ObjectId;

class MongoDB implements DriverInterface
{
    protected \MongoDB\Client $client;
    protected $dbname;

    public function __construct(string $protocol, string $host, string $user, string $pass, string $dbname, array $options)
    {
        try{
            //$this->client = new \MongoDB\Client("mongodb://$user:$pass@$host:$protocol/$dbname");//Düzenlenecek;

            $this->dbname = $dbname;
            $this->client = new \MongoDB\Client("mongodb://localhost:27017");

        }catch (\MongoException $exception){
            echo $exception->getMessage();
        }
    }

    public function all(string $table): array
    {
        $db= $this->client->selectDatabase($this->dbname);
        $collection = $db->$table;
        $result = $collection->find()->toArray();
        return $result;
    }

    public function find(string $table, mixed $id): mixed
    {
        $db= $this->client->selectDatabase($this->dbname);
        $collection = $db->$table;
        $result = $collection->findOne(['_id' =>new \MongoDB\BSON\ObjectId($id)]);
        return $result;
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