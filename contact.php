<?php

//get data
$txtname = $_POST['txtname'];
$txtmail = $_POST['txtmail'];
$txtsubject = $_POST['txtsubject'];
$txtmessage = $_POST['txtmessage'];

//database connection
$connection = new mysqli("localhost", "root", "", "contactdatabase");
if ($connection->connect_error) {
    die("Failed to connect: " . $connection->connect_error);
} else {
    $stmt = $connection->prepare("INSERT INTO contacttable (Name, Email_Address, Subject, Message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $txtname, $txtmail, $txtsubject, $txtmessage);
    $result = $stmt->execute();
    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
