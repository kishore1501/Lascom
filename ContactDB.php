<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "contactdb";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO contactform (name, email, subject, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message);

// Execute the statement
if ($stmt->execute()) {
    // Success! Send a confirmation email if desired
    // ...
} else {
    // Error inserting data into database
    // ...
}
echo "name: " . $name . ", email: " . $email . ", subject: " . $subject . ", message: " . $message;

// Close the database connection
$conn->close();
