<?php
include_once 'employee.php';
class SalaryEmployee extends Employee{
private $basicSalary;
public function __construct($name,$id,$email,$basicSalary)
{
    parent::__construct($name,$id,$email);
    $this->basicSalary=$basicSalary;
}
function display()
{
    parent::display();
    echo "BasicSalary : $this->basicSalary<br>";
}
function calculatePayroll()
{
    echo "Based on basic salary<br>";
}
}

?>