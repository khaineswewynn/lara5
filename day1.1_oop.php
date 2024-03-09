<?php
include_once 'day1_oop.php';
//object instantiation
$employee=new Employee("David","david@gmail.com","PM");
//object attributes
$employee->name="David"; //set up variables
echo $employee->name;
echo "<br>";

$employee->email="david@gmail.com";
echo $employee->email;
echo "<br>";

$employee->position="PM";
echo $employee->position;
echo "<br>";

$thiri_emp=new Employee("Thiri","thiri@gmail.com","Senior Developer");
$thiri_emp->display();
$thiri_emp->work();

$bruce=new Employee("Bruce","bruce@gmail.com","Net Engineer");
$bruce->display();
$bruce->work();


?>