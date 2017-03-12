<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
// put your code here
include 'dbConnect.php';
$sql = "SELECT * FROM books";
$results =$db->query($sql);
while ($row = $results->fetch_array()) {
    echo "<p>".$row['Isbn-10']."</p>";
    echo "<p>".$row['Isbn-13']."</p>";
    echo "<p>".$row['Author']."</p>";
    echo "<p>".$row['Title']."</p>";
    echo "<p>".$row['Language']."</p>";
    echo "<p>".$row['PublicationDate']."</p>";
    echo "<p>".$row['Publisher']."</p>";
    echo "<p>".$row['Price']."</p><br>";
}
?>
</body>
</html>

