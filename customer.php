<?php

abstract class Customer{
private $name,$email,$phone;

function __construct($name,$email,$phone)
{
    $this->name=$name;
    $this->email=$email;
    $this->phone=$phone;

}
public function getName(){
    echo "Name : ".$this->name;
}

abstract function purchase($amount);
}

class CreditCustomer extends Customer{
    private $limit_amount,$credit;
    
    function __construct($name,$email,$phone,$limit)
    {
       parent::__construct($name,$email,$phone);
       $this->limit_amount=$limit;
       $this->credit=0;
    }
    function purchase($amount)
    {
        if($this->credit<=$this->limit_amount)
            $this->credit+=$amount;

        echo "Credit : ". $this->credit;
    }
    
}

class PrepaidCustomer extends Customer{
private $prepaid_amount;
function __construct($name,$email,$phone,$amount)
    {
       parent::__construct($name,$email,$phone);
       $this->prepaid_amount=$amount;
       
    }
function purchase($amount)
{
    $this->prepaid_amount-=$amount;
    echo "Prepaid amount :".$this->prepaid_amount;
}
}

function makePurchase(Customer $customer) // multiple forms (Polymorphism)
{
    $customer->purchase(2000000);
}

$customer1=new CreditCustomer("David",'david@gamil.com','098777665',10000000);

$customer2=new PrepaidCustomer("HninHnin",'hnin@gmail.com','098887765',5000000);

makePurchase($customer1);
makePurchase($customer2);

$customers=[$customer1,$customer2,]





?>