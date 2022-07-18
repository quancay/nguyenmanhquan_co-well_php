<?php
session_start();
require_once './vendor/autoload.php'; 
use App\Controllers\OrderController;


include 'app/views/main.php';
$abc = new OrderController();
$abc -> index();
?> 