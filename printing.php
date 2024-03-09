<?php
include_once 'book.php';
include_once 'author.php';

$mike=new Author('Mike','mike@gmail.com');
$alice=new Author('Alice','alice@gmail.com');

$book1=new Book('Gone with the wind','200');
$book1->addAuthor($mike);
$book1->addAuthor($alice);

$book2=new Book('Motivation','300');
$book2->addAuthor($alice);

$book1_authors=$book1->getAuthors();
foreach($book1_authors as $author)
{
    $author->display();
}

$alice->showBooks();



?>