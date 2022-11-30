<?php

function connect_db($host, $username, $passwd, $port, $db){

    try {
        $options=[PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
        $connection = new PDO( "mysql:host=$host;dbname=$db;port=$port", $username, $passwd, $options);
    }

    catch (PDOException $e) {
        echo "Error connection to DB\n";
        return false;
    }

    return $connection;

}


$pdo = connect_db($host,$username,$userpassword,$port,$db_name);