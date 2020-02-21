<?php

namespace FilmDs;

class Database
{
    private $pdo;

    public function connect()
    {
        $db_connection = 'mysql';
        $db_name = 'FilmDs01';
        $db_host = 'localhost';

        $dsn = "${db_connection}:host=${db_host};dbname=${db_name}";
        $user = 'FilmDs01';
        $password = 'P@ssw0rd';

        $this->pdo = new \PDO($dsn, $user, $password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}