<?php

include_once 'test1.php';
include_once 'test2.php';
include_once 'author.php';
use customer\template as cus;
use employee as emp;
use author as author;

cus\getName(); // function in namespace
emp\getName();

echo cus\name; ///constant in namespace

$author=new author\Author("Bruce",'bruce@gmail.com');
$author->display();

?>