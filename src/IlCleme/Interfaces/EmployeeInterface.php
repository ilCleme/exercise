<?php

namespace IlCleme\Interfaces;

use IlCleme\Entity\Customer;

/**
 * Interface EmployeeInterface
 *
 * Define a required method of a Employee objects, based on implementation of
 * method getTotal of Revenue Class.
 *
 * @package IlCleme\Interfaces
 */
interface EmployeeInterface {

	/**
	 * Return the Type of Employee
	 *
	 * @return null|string
	 */
  	public function getType();

	/**
	 * Returns customers connected with the employee, if there aren't costumers
	 * this function return an empty array
	 *
	 * @return Customer[]|array[]
	 */
  	public function getCustomers();

}