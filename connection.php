<?php

$servername = "localhost"; //server name
$username = "root"; // default mysql username
$password = ""; // default password
$database = "myfirstdatabase";


//mysqli_connect()

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

