<?php

namespace IlCleme\Entity;

/**
 * Class EmployeeType
 *
 * EmployeeType class handle the method and properties of a type objects.
 * This class define the type of a Employee type property.
 *
 * @package IlCleme\Entity
 */
class EmployeeType {

  /** @var  $type string A string that describe a employee role */
  private $type = NULL;

  /**
   * Constructor of EmployeeType
   *
   * Set type property equal to string passed as argument. By default set this property to 'Sales'.
   *
   * @param string $type
   */
  public function __construct($type = 'Sales')
  {
	$this->type = $type;
  }

  /**
   * Return a string that identifier the type of this Employee
   *
   * @return string
   */
  public function getType()
  {
	return $this->type;
  }
}