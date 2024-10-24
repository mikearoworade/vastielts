<?php
// Mysqli Procedural
$servername = "localhost";
$username = "vast";
$password = "vast";
$dbname = "vastielts";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if(!$conn) {
    die("COnnection failed: " . mysqli_connect_error());
}

// echo "Connected Successfully";
