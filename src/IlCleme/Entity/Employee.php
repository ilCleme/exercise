<?php

namespace IlCleme\Entity;

use IlCleme\Interfaces\EmployeeInterface;
use IlCleme\Entity\EmployeeType;
/**
 * Class Employee.
 *
 * Employee class handle the method and properties of a employee objects
 */
class Employee implements EmployeeInterface
{
    /** @var EmployeeType Should contain a description of Type */
    private $type;

    /** @var Customer[]|array[] Should contain an array of Customers */
    private $customers;

    /**
    * Constructor.
    *
    * Inizialize the basic property of Employee objects
    *
    * @param array $costumers array of Customers
    * @param EmployeeType $employeeType Object identify the type of Employee
    */
    public function __construct(EmployeeType $employeeType, array $costumers = [])
    {

      $this->type = $employeeType;
      $this->customers = $costumers;
    }

    /**
    * {@inheritdoc}
    */
    public function getType()
    {
      return $this->type->getType();
    }

    /**
    * {@inheritdoc}
    */
    public function getCustomers()
    {
      return $this->customers;
    }

    public function getTotalEmployeeRevenue($minSales = 75000){
        $customerTotalSales = $this->getCustomersTotalSales($minSales);
        return $customerTotalSales;
    }

    public function getCustomersTotalSales($minSales)
    {
        $total = 0;
        if($this->getType() == 'Sales') {
            if (!empty($this->customers)) {
                foreach ($this->customers as $customer) {
                    $total += $customer->getOrdersTotal();
                }

                if ($total >= $minSales ){
                    return $total;
                }
            }
        }

        return 0;
    }
}
