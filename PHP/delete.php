<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdasar";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection Failed " . $conn->connect_error);
}

$sql = "DELETE FROM todo WHERE Id=" . $_GET['id'] . "";

if ($conn->query($sql) === TRUE){
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>