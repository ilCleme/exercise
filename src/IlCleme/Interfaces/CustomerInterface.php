<?php
/**
 * Created by PhpStorm.
 * User: ilcleme
 * Date: 22/10/16
 * Time: 18:41
 */

namespace IlCleme\Interfaces;

/**
 * Interface CustomerInterface
 *
 * Define a required method of a Customer objects, based on implementation of
 * method getTotal of Revenue Class.
 *
 * @package IlCleme\Interfaces
 */
interface CustomerInterface {

  /**
   * Return the order of customer
   *
   * Retrive the array of order that are connect with Customer objects
   *
   * @return \array[]|\IlCleme\Entity\Order[]
   */
  public function getOrders();

}