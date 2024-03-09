<?php
abstract class Employee{
    private $name,$id,$email;
    public function __construct($name,$id,$email)
    {
        $this->name=$name;
        $this->id=$id;
        $this->email=$email;
    }
    function getName()
    {
        echo "Name : ".$this->name;
    }
     function display()
    {
        echo $this->name,$this->email;
    }
    abstract function calculatePayroll(); // without implementation
   
}


?>