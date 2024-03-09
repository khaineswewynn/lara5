<?php
include_once "product.php";

$computer1=new Computer("001","Lenove16inches","Lenovo","1200000","16");
$computer1->sale();
$computer1->setNCategory("Laptop");
//echo $computer1->getCategory();


?>