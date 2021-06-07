<?php


namespace App;


class StudentDataGateway
{
    private $table;
    public function __construct($host, $dbname, $username, $password)
    {
        $this->table = new PDO("mysql:host = $host dbname = $dbname,$username, $password");
        $this->table->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}