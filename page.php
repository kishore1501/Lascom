<?php
// Replace $servername, $username, $password, and $dbname with your database connection details
$connection = new mysqli("localhost", "root", "", "pages");

// Prepare the query and bind the parameter
$id = 1;
$stmt = $mysqli->prepare("SELECT content FROM pages WHERE id = ?");
$stmt->bind_param("i", $id);

// Execute the query and fetch the result
$stmt->execute();
$stmt->bind_result($content);
$stmt->fetch();

// Close the statement and database connection
$stmt->close();
$mysqli->close();

// Output the content as HTML
echo '<div>' . $content . '</div>';
