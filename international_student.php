<?php
include_once 'student.php';
class InternationalStudent extends Student{
   // private $name,$email,$phone,$major,$passport;
   private $passport;
   public static $count=0; //class oriented 
    
    function __construct($name,$email,$phone,$major,$passport)
    {
    //   $this->name=$name;
    //   $this->email=$email;
    //   $this->phone=$phone;
    //   $this->major=$major;
    parent::__construct($name,$email,$phone,$major);
      $this->passport=$passport; 
      self::$count++;
    }
    function checkPassport()
    {
        echo "check passport";
    }
    function displayChild() // Overriding Method
    {
        parent::display(); //parent information
        echo "<br> Passport Information : $this->passport"; //child information
    }
}


?>