<?php
namespace App\Models;
use PDO;
 class Order{
    /**
     * return echo Nguyen manh quan
     * @return string
     * 
     */
    public function __construct()
    {
        $dburl = "mysql:host=localhost;dbname=duanmau2021;charset=utf8";
        $username = 'root';
        $password = '';

        $conn = new PDO($dburl, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    public function getOrder(){
        echo "Nguyễn Mạnh Quân";
    }
 }


?>