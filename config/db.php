<?php

require('../config/config_db.php');

function db_connection(): ?PDO
{
    try {
        $connect = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;

    } catch (PDOException $e) {
        echo $e->getMessage();
        return null;
    }

}

$pdo = db_connection();