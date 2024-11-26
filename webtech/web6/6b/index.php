<?php
// Load XML file
$xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");

// Display book information
foreach ($xml->book as $book) {
    echo "Title: " . $book->title . "<br>";
    echo "Author: " . $book->author . "<br>";
    echo "Genre: " . $book->genre . "<br>";
    echo "Published Year: " . $book->published_year . "<br><br>";
}
?>
