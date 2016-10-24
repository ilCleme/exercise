<?php

namespace IlCleme\Entity;

use IlCleme\Entity\Order;
use IlCleme\Interfaces\CustomerInterface;

/**
 * Class Customer
 *
 * Define a Customer object
 *
 * @package IlCleme\Entity
 */
class Customer implements CustomerInterface {

  /** @var  $orders Order[]|array[] Contain an array of Order related with costumer */
  private $orders;

  public function __construct()
  {
	$this->orders = array();
  }

  /**
   * {@inheritdoc}
   */
  public function getOrders()
  {
	return $this->orders;
  }

}