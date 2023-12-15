<?php
abstract class DbManager{
    protected $bdd;

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbName = 'exam_mvc';

    public function __construct(){
        $this->bdd = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName,
            $this->username,
            $this->password);
    }
}
