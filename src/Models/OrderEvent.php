<?php
namespace TriggMineSDK\Models;

class OrderEvent
{
    public $customer;
    
    public $order_id;
    
    public $date_created;
    
    public $status;
    
    public $qty_total;
    
    public $price_total;
    
    public $products;
}