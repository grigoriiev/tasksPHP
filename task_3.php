<?php
class User
{



}

class Employee extends User
{

    private $salary = 75000;
    public function salaryCalculation($months)
    {
    return $this->salary-($this->salary*$months*13/100);
    }

    public function vacationPay($days)
    {
    $salary=($this->salary /29.3 )*$days;
    return round($salary -($salary*13/100),2);

    }
}

$employee= new Employee;
echo $employee->salaryCalculation(1).PHP_EOL;
echo $employee->vacationPay(28);