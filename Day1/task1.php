<?php

require '../connection.php';

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


