<?php


//insert 5 sample data in books and message table created in task2 and task3

require '../connection.php';


$sql = "INSERT INTO message
( id , senderid, receiverid, isseen, timestamp)
VALUES(NULL,101,1001, TRUE ,'1:00') ";
$result = mysqli_query($conn,$sql);
if ($result)
{
    echo "data inserted successfully  <br>"; 
}
else
    {

echo mysqli_error($conn ) . "<br>"; 

    }
    $sql1 = "INSERT INTO message
( id , senderid, receiverid, isseen, timestamp)
VALUES(NULL,11,10, TRUE ,'11:00') ";
$result1 = mysqli_query($conn,$sql1);
if ($result1)
{
    echo "data inserted successfully  <br>"; 
}
else
    {

echo mysqli_error($conn ) . "<br>"; 

    }
    $sql2 = "INSERT INTO message
( id , senderid, receiverid, isseen, timestamp)
VALUES(NULL,1001,111, FALSE ,'7:30') ";
$result2 = mysqli_query($conn,$sql2);
if ($result2)
{
    echo "data inserted successfully  <br>"; 
}
else
    {

echo mysqli_error($conn ) . "<br>"; 

    }
    $sql3 = "INSERT INTO message
( id , senderid, receiverid, isseen, timestamp)
VALUES(NULL,1010,1001, TRUE ,'12:00') ";
$result3 = mysqli_query($conn,$sql);
if ($result3)
{
    echo "data inserted successfully  <br>"; 
}
else
    {

echo mysqli_error($conn ) . "<br>"; 

    }
    $sql4 = "INSERT INTO message
( id , senderid, receiverid, isseen, timestamp)
VALUES(NULL,103,303, FALSE ,'3:30') ";
$result4 = mysqli_query($conn,$sql4);
if ($result4)
{
    echo "data inserted successfully  <br>"; 
}
else
    {

echo mysqli_error($conn ) . "<br>"; 

    }

    $sql5 = "INSERT INTO books
( id ,  bookname,author, price)
VALUES(NULL,'the psychologyof the esoteric','osho', 3000) ";
$result5 = mysqli_query($conn,$sql5);
if ($result5)
{
    echo "data inserted successfully on table books  <br>"; 
}
else
    {

echo mysqli_error($conn ) . "<br>"; 

    }

    $sql6 = "INSERT INTO books
    ( id ,  bookname,author, price)
    VALUES(NULL,'muna madan','laxmi psd devkota', 1500) ";
    $result6 = mysqli_query($conn,$sql6);
    if ($result6)
    {
        echo "data inserted successfully on table books  <br>"; 
    }
    else
        {
    
    echo mysqli_error($conn ) . "<br>"; 
    
        }

    
        $sql7 = "INSERT INTO books
( id ,  bookname,author, price)
VALUES(NULL,'the over story','richard power', 2500) ";
$result7 = mysqli_query($conn,$sql7);
if ($result7)
{
    echo "data inserted successfully on table books  <br>"; 
}
else
    {

echo mysqli_error($conn ) . "<br>"; 

    }            

    $sql8 = "INSERT INTO books
( id ,  bookname,author, price)
VALUES(NULL,'freedom in exile','dalai lama', 3500) ";
$result8 = mysqli_query($conn,$sql8);
if ($result8)
{
    echo "data inserted successfully on table books  <br>"; 
}
else
    {

echo mysqli_error($conn ) . "<br>"; 

    }    
 
    $sql9 = "INSERT INTO books
    ( id ,  bookname,author, price)
    VALUES(NULL,'six machine','chris gayle', 2000) ";
    $result9 = mysqli_query($conn,$sql9);
    if ($result9)
    {
        echo "data inserted successfully on table books  <br>"; 
    }
    else
        {
    
    echo mysqli_error($conn ) . "<br>"; 
    
        }
 
 
 
 ?>

    
    