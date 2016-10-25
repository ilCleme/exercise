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

  /** @var array $data This variable contains any data of objects */
  private $data = array();

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
  public function __construct(array $products, $total)
  {
    $this->products = $products;
    $this->total = $total;
  }

  /**
   * @param string $name
   * @param string  $value
   */
  public function __set($name, $value)
  {
    $this->data[$name] = $value;
  }

  /**
   * @param string $name
   */
  public function __get($name)
  {
    if (!isset($this->data[$name])) {
      throw new \OutOfRangeException('Invalid name given');
    }
    return $this->data[$name];
  }

}