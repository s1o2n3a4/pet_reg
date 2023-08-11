<?php

require_once "./config.php";

$dsn= "mysql:host=$host;dbname=$dbname";

try{
    $pdo= new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die("Could not connect to database");
}