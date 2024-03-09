<?php
namespace author;
class Author{
    private $name;
    private $email;
    private $books=[];
    function __construct($name,$email)
    {
        $this->name=$name;
        $this->email=$email;
    }
    function display()
    {
        echo "Author : $this->name, $this->email <br>";
    }
    function setBooks($books)
    {
        $this->books[]=$books;
    }
    function getBooks()
    {
        return $this->books;
    }
    function showBooks()
    {
        foreach($this->books as $book)
        {
            $book->display();
        }
    }
}


?>