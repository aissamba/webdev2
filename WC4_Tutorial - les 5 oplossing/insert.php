<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    //Not a POST request, return to form.
      include 'form.php';
} else {
    
    include_once 'database/BookDB.php'; 
//    Get values from $_POST variable
    $title = $_POST['title'];
    $releasedate = $_POST['releasedate'];
    $price = $_POST['price'];
    $emailPublisher = $_POST['emailPublisher'];
    
//    Validate the data using an external validation class of PHP file
//    ...
    
//    Make the book object to insert
    $book = new Book(0,$title,$releasedate,$price,$emailPublisher);
    
//    Insert the book
    BookDb::insert($book);
//    Go back to index
    header("location:index.php");

}
?>