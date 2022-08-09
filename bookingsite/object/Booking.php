<?php
// USELESS file!!!!!!!!



class Booking {
    public $carparkId;
    public $lotId;
    public $address;
    public $price;
    public $check_in;
    public $check_out;

    public function __construct($carparkId, $lotId, $address, $price, $check_in, $check_out) {
      $this->carparkId = $carparkId;
      $this->lotId = $lotId;
      $this->address = $address;
      $this->price = $price;
      $this->check_in = $check_in;
      $this->check_out = $check_out;
      
    }
}
?>
