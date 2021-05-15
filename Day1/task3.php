<?php

// create a table for books with following columns:
    //id
    //bookname
    //author
    //price
    require '../connection.php';

    $sql = 'CREATE TABLE IF NOT EXISTS books (id INT(10) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    bookname VARCHAR(20) NOT NULL,
    author VARCHAR(20) NOT NULL,
    price INT(20) NOT NULL)';

    if(mysqli_query($conn,$sql))
    {

echo "Table created successfully or already exixts <br>";


    }
    else
    {
        echo "could not create table" . mysqli_error($conn);
    }
    mysqli_close($conn);

    ?>