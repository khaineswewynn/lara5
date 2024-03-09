<?php

interface IShape{
function calculateArea();
}

class Rectangle implements IShape{
    private $length,$width;

    public function __construct($l,$w)
    {
        $this->length=$l;
        $this->width=$w;
    }
    function calculateArea()
    {
        echo "Area : " . ($this->length * $this->width);
    }
}

class Square implements IShape{
    private $length;
    public function __construct($l)
    {
        $this->length=$l;
    }
    function calculateArea()
    {
        echo "Area : ". $this->length*$this->length;
    }
   
}

class Circle implements IShape{
    private $radius;
    public function __construct($radius)
    {
        $this->radius=$radius;
    }

    function calculateArea()
    {
        echo "Area : ". 3.14*($this->radius^2);
    }
}


?>