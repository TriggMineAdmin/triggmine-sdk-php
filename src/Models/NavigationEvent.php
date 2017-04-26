<?php
/**
  * Navigation data, collected on a product page whenever it is called.
  * 
  */
namespace TriggMineSDK\Models;

/**
  * Navigation event class with a set of corresponding attributes.
  *
  * This data should be collected whenever a single product page is initialized.
  */
class NavigationEvent
{
    /**
      * User-Agent which called the page.
      */
    public $user_agent;

    /**
      * Object of ProspectEvent class.
      */
    public $customer;

    /**
      * Object of ProductEvent class.
      */
    public $products;
}