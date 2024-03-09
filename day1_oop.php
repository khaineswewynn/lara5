<?php
class Employee{
//attributes
public $name;
public $email;
public $position;

//construtor function
function __construct($name,$email,$position)
{
    $this->name=$name;
    $this->email=$email;
    $this->position=$position;
} 
//method
function work(){
echo $this->name ." work in IT department <br>";
}

function display(){
    echo $this->name . "," . $this->email . "<br>";
}

}
?>