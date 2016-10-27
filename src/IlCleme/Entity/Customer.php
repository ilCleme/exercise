<?php

namespace IlCleme\Entity;

use IlCleme\Interfaces\CustomerInterface;

/**
 * Class Customer.
 *
 * Define a Customer object
 */
class Customer implements CustomerInterface
{
    /** @var $orders Order[]|array[] Contain an array of Order related with costumer */
    private $orders;

    /** @var $name string Name of Customers */
    private $name;

    public function __construct($name)
    {
        $this->orders = array();
        $this->name = $name;
    }

    /**
    * {@inheritdoc}
    */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
    * Add a order.
    *
    * @param \IlCleme\Entity\Order $order
    */
    public function addOrders(Order $order)
    {
        $this->orders[] = $order;
    }

    /**
    * Get the name of this Customer.
    *
    * @return string
    */
    public function getName()
    {
        return $this->name;
    }

    /**
    * Set name to this Customer.
    *
    * @param $name
    */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getOrdersTotal()
    {
        $total = 0;
        foreach($this->orders as $order){
            $total += $order->total;
        }

        return $total;
    }
}
