<?php

// create a table for books with following columns:
    //id
    //bookname
    //author
    //price
    require '../connection.php';
    $sql="CREATE TABLE IF NOT EXISTS books(
        id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        bookname VARCHAR(30)  NOT NULL,author VARCHAR(30)  NOT NULL,price INT(20) NOT NULL)";
        if(mysqli_query($conn,$sql)){
            echo" table created or already exists";
        }else{
        echo "errror creating table :".mysqli_error($conn);
    }
