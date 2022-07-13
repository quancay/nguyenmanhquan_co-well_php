<?php
session_start();
require_once './vendor/autoload.php'; 
use App\Controllers\OrderController;


include 'public/index.php';
$abc = new OrderController();
$abc -> index();
?>