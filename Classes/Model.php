<?php

// namespace Site\Classes;

// use Site\config;

abstract class Model
{
    protected $dbh;
    protected $statement;

    public function __construct()
    {
        $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
    }

    public function query($query)
    {
        $this->statement = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if(is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->statement->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->statement->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}
