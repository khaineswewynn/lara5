<?php

include_once 'part_time.php';
include_once 'salary_employee.php';

$emp1=new PartTime("David","I001","admin@gmail.com",80);

$emp2=new SalaryEmployee("Thiri",'I002','thiri@gmail.com',5000);

$emp1->display();
$emp1->calculatePayroll();

$emp2->display();
$emp2->calculatePayroll();

?>