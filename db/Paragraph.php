<?php
//database connection
$connection = new mysqli("localhost", "root", "", "lascomdb");

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

//Fetching text from "paragraph" table
$sql = "SELECT Content FROM paragraph WHERE Paragraphid = 1";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$content = $row['Content'];

echo $content;

mysqli_close($connection);
