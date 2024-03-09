<?php
session_start();
include_once 'bankAccount.php';
if(isset($_POST['submit']))
{
    if(!empty($_POST['account']))
    {
        $account=$_POST['account'];
    }
    $type=$_POST['type'];
    if(!empty($_POST['balance']))
    {
        $balance=$_POST['balance'];
    }
    if(!empty($_POST['amount']))
    {
        $amount=$_POST['amount'];
    }
    $process=$_POST['process'];
    $bankaccount=new BankAccount($account,$type,$balance);
    if($process=="deposit")
    {
        $bankaccount->deposit($amount);
        //$bankaccount->checkBalance();
       
    }
    else
    {
        $bankaccount->withdraw($amount);
        //$bankaccount->checkBalance();
    }
    $_SESSION['bankaccount']=$bankaccount;
    header("location:transaction_success.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div>
                <label for="" class="form-label">Account Number</label>
                <input type="text" name="account" id="" class="form-control">
            </div>
            <div>
                <label for="" class="form-label">Account Type</label>
                <select name="type" id="" class="form-select">
                    <option value="fixed">fixed</option>
                    <option value="current">Current</option>
                    <option value="special">Special</option>
                </select>
            </div>
            <div>
                <label for="" class="form-label">Balance</label>
                <input type="number" name="balance" id="" class="form-control">
            </div>
            <div>
                <label for="" class="form-label">Amount</label>
                <input type="number" name="amount" id="" class="form-control" value="0">
            </div>
            <div>
                <input type="radio" name="process" id="" class="form-check" value="deposit" checked> Deposit
                <input type="radio" name="process" id="" class="form-check" value="withdraw"> Withdraw
            </div>
            <div>
                <button class="btn btn-success" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>