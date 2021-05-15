<?php

   require '../connection.php';
// create a table for books with following columns:
    //id
    //bookname
    //author
    //price

    $sql = "CREATE TABLE IF NOT EXISTS Book (
        id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        bookname VARCHAR(30) NOT NULL,
        author VARCHAR(30) NOT NULL,
        price INT(20) NOT NULL)";
    if(mysqli_query($conn,$sql)){
    echo "Table Books created or already exist";
    }else{
    echo "Error creating table: " . mysqli_error($conn);
    }
    ?>