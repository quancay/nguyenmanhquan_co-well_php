<?php
namespace App\Controllers;

use \App\Models\Order;

class OrderController{
    public function  index(){
        $order = new Order();
        $order -> getOrder();
      
    }
}

?>