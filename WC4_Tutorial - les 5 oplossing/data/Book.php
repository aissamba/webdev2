<?php
//    Book class with all the info from the database
class Book {
    public $bookId;
    public $title;
    public $releasedate;
    public $priceExclVAT;
    public $emailPublisher;

    public function __construct($bookId, $title, $releasedate, $priceExclVAT, $emailPublisher) {
        $this->bookId = $bookId;
        $this->title = $title;
        $this->releasedate = $releasedate;
        $this->priceExclVAT = $priceExclVAT;
        $this->emailPublisher = $emailPublisher;
    }

    //Extra functionality can be written here
    
}

?>