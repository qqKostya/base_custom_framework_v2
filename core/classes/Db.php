<?php

class Db
{
    private $connection;
    private PDOStatement $stmt;

    public function __construct(array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};port={$db_config['port']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
        try {
            $this->connection = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
        } catch (PDOException $e) {
            abort(500);
        }
    }

    public function query($query)
    {
        $this->stmt = $this->connection->prepare($query);
        $this->stmt->execute();
        return $this;
    }

    public function findAll()
    {
        return $this->stmt->fetchAll();
    }

    public function find()
    {
        return $this->stmt->fetch();
    }
}
