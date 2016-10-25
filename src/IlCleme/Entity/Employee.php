<?php

namespace IlCleme\Entity;

use IlCleme\Entity\Customer;
use IlCleme\Entity\EmployeeType;
use IlCleme\Interfaces\EmployeeInterface;

/**
 * Class Employee
 *
 * Employee class handle the method and properties of a employee objects
 *
 * @package IlCleme\Entity
 */
class Employee implements EmployeeInterface{

  /** @var EmployeeType Should contain a description of Type */
  private $type;

  /** @var Customer[]|array[] Should contain an array of Customers */
  private $customers;

  /**
   * Constructor
   *
   * Inizialize the basic property of Employee objects
   *
   * @param array $costumers array of Customers
   * @param string $nameType String identify the type of Employee
   */
  public function __construct(array $costumers = [], $nameType = '')
  {
    if(!empty($nameType)){
      $this->type = new EmployeeType($nameType);
    } else {
      $this->type = new EmployeeType();
    }

	$this->customers = $costumers;
  }

  /**
   * {@inheritDoc}
   */
  public function getType()
  {
	return $this->type->getType();
  }

  /**
   * {@inheritDoc}
   */
  public function getCustomers()
  {
	return $this->customers;
  }
}