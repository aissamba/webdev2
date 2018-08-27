<?php

include_once "data/Book.php";
include_once "database/DatabaseFactory.php";
//CRUB methods for Book objects
// Create, Read, Update, Delete

class BookDb {
    
    private static function getConnection(){
        return DatabaseFactory::getDatabase();
    }
    
    public static function getAll(){
//        Execute query
        $results = self::getConnection()->executeQuery("SELECT * FROM Book");
//        Prepare array to return to frontend
        $resultsArray = array();
        for($i = 0; $i < $results->num_rows; $i++ ){
            //Retrieves the current selected row
            $row = $results->fetch_array(); 
            //Make a book
            $book = self::convertRowToObject($row);
            //add book to result array
            $resultsArray[$i] = $book;  
        }

        return $resultsArray;
        
    }
    
    public static function insert($book){
        echo "insert start";
        return self::getConnection()->executeQuery("INSERT INTO Book(Title, ReleaseDate, Price, EmailPublisher) VALUES ('?','?','?','?')", array($book->title, $book->releasedate,$book->priceExclVAT,$book->emailPublisher));  
    }
    
    
        
    public static function convertRowToObject($row){
        return new Book(
            $row['BookId'], 
            $row['Title'], 
            $row['Releasedate'], 
            $row['Price'], 
            $row['EmailPublisher']);
    }
    
}

?>