<?php
include_once 'bankaccount.php';
session_start();

if(isset($_SESSION['bankaccount']))
{
    $bankaccount=$_SESSION['bankaccount'];
    $bankaccount->checkBalance();
}

?>