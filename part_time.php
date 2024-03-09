<?php
include_once 'employee.php';
class PartTime extends Employee{
private $hourlyRate;
public function __construct($name,$id,$email,$hourlyRate)
{
    parent::__construct($name,$id,$email);
    $this->hourlyRate=$hourlyRate;
}
function display()
{
    parent::display();
    echo "HourlyRate : $this->hourlyRate <br>";
}
function calculatePayroll()
{
    echo "Based on Hourly <br>";

}
}

?>