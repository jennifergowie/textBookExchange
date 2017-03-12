<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a listing</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>
<body>
<header>
    <h1>Textbook Exchange Listings</h1>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Browse</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="#">Create Listing</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </nav>
</header>

<?php
    //Establish DB connection
    include("dbConnect.php");
    $SQL_Query_Books = "SELECT * from books";
    $Processed_Results = $db->query($SQL_Query_Books);
        while($row = $Processed_Results->fetch_array()){
            echo "<p></p>";
        }
    ?>

    <footer>
    <div class="container">
        <p>&copy; 2017 textbookexchange.com</p>
    </div>
</footer>
</body>
</html>