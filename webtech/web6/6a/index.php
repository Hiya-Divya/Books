<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ThemeBooks";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data
$sql = "INSERT INTO Books (title, author, genre, published_year) 
        VALUES ('Radio Silence', 'Alice Oseman', 'Young Adult', 2016)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Fetch data
$sql = "SELECT * FROM Books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Title: " . $row["title"] . 
             " - Author: " . $row["author"] . 
             " - Genre: " . $row["genre"] . 
             " - Published Year: " . $row["published_year"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
