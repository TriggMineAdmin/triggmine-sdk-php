<?php
/**
  * Prospect (customer) data.
  */
namespace TriggMineSDK\Models;

/**
  * Prospect (customer) event class with a set of corresponding attributes.
  *
  * This data should be collected and used to represent a customer in any event which requires it.
  */
class ProspectEvent
{
    /**
      * Device hash generated by FingerprintJS.
      */
    public $device_id;

    /**
      * Device hash generated by ClientJS.
      */
    public $device_id_1;

    /**
      * ID of the customer in your DB.
      */
    public $customer_id;

    /**
      * Customer's first name.
      */
    public $customer_first_name;

    /**
      * Customer's last name.
      */
    public $customer_last_name;

    /**
      * Customer's email address.
      */
    public $customer_email;

    /**
      * Customer's registration date.
      */
    public $customer_date_created;
}