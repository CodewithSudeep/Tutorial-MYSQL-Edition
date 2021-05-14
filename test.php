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
echo "Connected successfully";



// $sql = "INSERT INTO users 
//         (id, username, password, email) 
//         VALUES (NULL, 'username', 'password', 'email@gmail.com')";

// $result = mysqli_query($conn, $sql);

// if ($result) {
//     echo "Data inserted succesfully";
// }else{
//     echo mysqli_errno($conn);
// }

// $sql1 = "INSERT INTO users 
//         (id, username, password, email) 
//         VALUES (NULL, 'sudeep', 'password', 'email@gmail.com')";

// $sql2 = "INSERT INTO users 
//         (id, username, password, email) 
//         VALUES (NULL, 'bibek', 'bibek123456', 'bibek@gmail.com')";

// $result1 = mysqli_query($conn, $sql1);

// if ($result1) {
//     echo "<br>Data inserted succesfully";
// }else{
//     echo mysqli_err($conn);
// }


// $result2 = mysqli_query($conn, $sql2);

// if ($result2) {
//     echo "<br>Data inserted succesfully";
// }else{
//     echo mysqli_errno($conn);
// }

$sql3 = "SELECT * from users";

$result4 = mysqli_query($conn, $sql3);

if ($result4) {
//    var_dump($result4);
    while( $row  = mysqli_fetch_assoc($result4)){
        echo "<br> ID : ". $row['id']."<br>";
        echo "Username:".$row['username']."<br>";
        echo "email:".$row['email']."<br>";
        echo "password:".$row['password']."<br>";   
    }
}else{
    echo "No data found in table";
}



?>