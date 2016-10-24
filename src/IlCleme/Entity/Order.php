<?php

namespace IlCleme\Entity;

/**
 * Class Order
 *
 * Define the structure of a Order. Based on implementation of getTotal method
 * in Revenue class.
 *
 * @package IlCleme\Entity
 */
class Order {

  /** @var  $total int Contain total revenue of this order */
  public $total;

  /** @var array $product Contain the list of product in this single order */
  protected $products = array();

  /** @var int $price Contain the price of any product */
  protected $price = 10;

  /**
   * Constructor of Order objects
   *
   * Set public property total as a Closure that calculate the amount of this order.
   *
   * @param array $products List of products connect with order
   */
  public function __construct(array $products)
  {
    $this->products = $products;
    $this->total = function(){
      $totalPrice = 0;

      $totalPrice += $this->price * count($this->products);

      return $totalPrice;
    };
  }

}