<?php

class Dbh{
    private $host = "localhost";
    private $dbName = "ticketApp";
    private $userName = "root";
    private $pwd = "";

    protected function connect()
    {
        $dns = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
        $pdo = new PDO($dns, $this->userName, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}