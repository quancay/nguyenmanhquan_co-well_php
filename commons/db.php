<?php

function pdo_get_connection(){
    $dburl = "mysql:host=localhost;dbname=duanmau2021;charset=utf8";
    $username = 'root';
    $password = '';

    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
pdo_get_connection();

?>