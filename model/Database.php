<?php

class Database{

    const HOST_NAME = 'localhost';
    const DB_NAME = 'ecommerce';
    const USER_NAME = 'root';
    const MDP = '';

    public function getDb(){

        $pdo = new PDO("mysql:dbname=".self::DB_NAME. ";". "host=". self::HOST_NAME, self::USER_NAME, self::MDP);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}