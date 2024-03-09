<?php

class Student{
   // private $name,$email,$phone,$major;
   protected $name,$email,$phone,$major;
    
    function __construct($name,$email,$phone,$major)
    {
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->major=$major;
        
    }
    final function display() //Overridden Method
    {
        echo "Student Information:";
        echo "$this->name , $this->email , $this->phone , $this->major <br>";
    }
    function checkGrade($marks)
    {
        if($marks >=80)
        {
            echo "Grade A <br>";
        }
        else if($marks >=70)
        {
            echo "Grade B<br>";
        }
        else if($marks >=60)
        {
            echo "Grade C<br>";
        }
        else
        {
            echo "Grade D<br>";
        }
    }
    function setMajor($major) //setter method
    {
        $this->major=$major;
    }
    function getMajor() //getter method
    {
        return $this->major;
    }
    
}



?>