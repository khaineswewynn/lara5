<?php
include_once 'student.php';
include_once 'international_student.php';

$count=0;
$david=new Student("David","david@gmail.com","09786544432","IT");
$david->display();
//$david->major="Computer Science"; // update variables
$david->setMajor("Computer Science");
$david->display();

if($david->getMajor()=="Computer Science")
{
    $count++;
    echo " $count students of Computer Science<br>";
}


$bruce=new InternationalStudent("Bruce","bruce@gmail.com","0978665432","Network","IM00345");
$bruce->displayChild(); //use parent's display

echo "<br>Number of International student : ". InternationalStudent::$count;

$leo=new InternationalStudent("Leo","leo@gmail.com","0989999876","IT","BM09987");
$leo->displayChild();
echo "<br>Number of International student : ". InternationalStudent::$count;
?>