<?php
interface IProcess{
    function on();
    function off();
    function volIncrease();
    function volDecrease();

}
interface IOperate{
    function open();
    function clone();
}

trait EletcronicDevice{
    private $category;

    public function setCategory($category)
    {
        $this->category=$category;
    }
    public function getCategory()
    {
        return $this->category;
    }
}

trait NoteBook{
    private $category;
    public function setCategory($category)
    {
        $this->category=$category;
    }
    public function getCategory()
    {
        return $this->category;
    }
}

abstract class Product{
    private $id,$name,$brand,$model,$price;
    function __construct($id,$name,$brand,$price)
    {
        $this->id=$id;
        $this->name=$name;
        $this->brand=$brand;
       
        $this->price=$price;
    }
    abstract function sale();
}

class Computer extends Product implements IProcess,IOperate{
    private $screen_size,$model;
    use EletcronicDevice,NoteBook{
        // NoteBook::setCategory insteadOf EletcronicDevice;
        // NoteBook::getCategory insteadOf EletcronicDevice;
        NoteBook::setCategory as setNCategory; //alias 
        NoteBook::getCategory as getNCategory;
    } // call ElectronicDevice
    function __construct($id,$name,$brand,$price,$screen_size)
    {
        parent::__construct($id,$name,$brand,$price);
        $this->screen_size=$screen_size;
    }
    function sale()
    {
        echo "Computer Sale";
    }
    function on()
    {
        echo "Computer truns on";
    }
    function off()
    {
        echo "Computer truns off";
    }
    function volDecrease()
    {
        echo "Computer Volume decreases";
    }
    function volIncrease()
    {
        echo "Computer volume increases";
    }
    function open()
    {
        echo "can be opened";
    }
    function clone()
    {
        echo "can be cloned";
    }
}  

class Lipstick extends Product{
    private $color,$type;

    function __construct($id,$name,$brand,$price,$color,$type)
    {
        parent::__construct($id,$name,$brand,$price);
        $this->color=$color;
        $this->type=$type;
    }
    function sale()
    {
        echo "Lipstick Sale";
    }

}

?>