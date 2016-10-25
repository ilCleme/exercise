<?php
/**
 * Partendo dalla classe Revenue crea le classi mancanti (Employee, EmployeeType, Customer, Order) che implementino
 * almeno i metodi citati. Utilizza gli standard PSR-2 e PSR-4, commenta tutto il codice in inglese utilizzando PHPDoc.
 * Non utilizzare framework.
 * Riscrivi il metodo getTotal della classe Revenue senza utilizzare cicli foreach.
 * Crea un pacchetto con composer utilizzando le classi create.
 *
 * ** BONUS **
 * Implementa almeno un design pattern che ritieni possa essere applicato.
 * Installa un pacchetto composer di tua scelta ed utilizzalo all'interno di una delle classi.
 * Usa Traits, Closures, Magic Methods.
 */
namespace IlCleme\Entity;

class Revenue
{
    /**
     * @param Employee[]|array $employees
     *
     * @return int
     */
    public function getTotal($employees = [])
    {
        $totalRevenue = 0;
        $minSales = 75000;
        /*foreach ($employees as $employee) {
            $employeeType = $employee->getType();
            if ($employeeType == 'Sales') {
                $customers = $employee->getCustomers();
                foreach ($customers as $customer) {
                    $customerTotalSales = 0;
                    foreach ($customer->getOrders() as $order) {
                        $customerTotalSales += $order->total;
                    }
                    if ($customerTotalSales >= $minSales) {
                        $totalRevenue += $customerTotalSales;
                    }
                }
            }
        }*/

        while (list($var, $employee) = each($employees)) {
            $employeeType = $employee->getType();
            if ($employeeType == 'Sales') {
                $customers = $employee->getCustomers();
                while (list($var, $customer) = each($customers)) {
                    $customerTotalSales = 0;
                    $orders = $customer->getOrders();
                    while (list($var, $order) = each($orders)) {
                        $customerTotalSales += $order->total;
                    }
                    if ($customerTotalSales >= $minSales) {
                        $totalRevenue += $customerTotalSales;
                    }
                }
            }
        }

        return $totalRevenue;
    }
}
