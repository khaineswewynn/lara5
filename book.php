<?php

class Book{
    private $title;
    private $price;
    private $authors=[];
    public function __construct($title,$price)
    {
        $this->title=$title;
        $this->price=$price;
    }
    function addAuthor($author)
    {
        $this->authors[]=$author;
        $author->setBooks($this);
    }
    function getAuthors()
    {
        return $this->authors;
    }
    function display()
    {
        echo "Book Title : $this->title <br>";
        echo "Book price:$this->price <br>";
        
    }

}

?>