<?php

    $db_name = 'djs_db';
    $server_name = '127.0.0.1';
    $db_user = 'root';
    $db_password = '';

    try {
        $myPDO = new PDO("mysql:host=$server_name; dbname=$db_name; charset=utf8; port=3306". $db_password, $db_user);
        $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        $e->getMessage();
    }