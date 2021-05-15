<?php


//insert 5 sample data in books and message table created in task2 and task3
require'../connection.php';
$sql="INSERT INTO books(id,bookname,author,price)
VALUES(NULL,'english','haribahadur',50)";
$result=mysqli_query($conn,$sql);
if ($result){
    echo"data inserted sucesfuly";
}
else{
    echo mysqli_error($conn);
}
$sql1="INSERT INTO books(id,bookname,author,price)
VALUES(NULL,'math','bahadur',100)";
$result1=mysqli_query($conn,$sql1);
if ($result1){
    echo"data inserted sucesfuly";
}
else{
    echo mysqli_error($conn);
}
$sql2="INSERT INTO books(id,bookname,author,price)
VALUES(NULL,'nep','hari' ,5)";
$result2=mysqli_query($conn,$sql2);
if ($result2){
    echo"data inserted sucesfuly";
}
else{
    echo mysqli_error($conn);
}
$sql3="INSERT INTO books(id,bookname,author,price)
VALUES(NULL,'sci','raj',500)";
$result3=mysqli_query($conn,$sql3);
if ($result3){
    echo"data inserted sucesfuly";
}
else{
    echo mysqli_error($conn);
}
$sql4="INSERT INTO books(id,bookname,author,price)
VALUES(NULL,'neph','ram',200)";
$result4=mysqli_query($conn,$sql4);
if ($result4){
    echo"data inserted sucesfuly";
}
else{
    echo mysqli_error($conn);
}
//for task 2
$sqla="INSERT INTO message (id,senderid,receiverid,isseen,timestamp)
VALUES(NULL,10,11,FALSE,'11:00')";
$resulta=mysqli_query($conn,$sqla);
if($resulta){
    echo"data inserted sucesfuly";
}
else{
    echo mysqli_error($conn);
 
}
$sqlb="INSERT INTO message (id,senderid,receiverid,isseen,timestamp)
VALUES(NULL,101,110,TRUE,'11:01')";
$resultb=mysqli_query($conn,$sqlb);
if($resultb){
    echo"data inserted sucesfuly";
}
else{
    echo mysqli_error($conn); 
}
$sqlc="INSERT INTO message (id,senderid,receiverid,isseen,timestamp)
VALUES(NULL,102,115,FALSE,'12:01')";
$resultc=mysqli_query($conn,$sqlc);
if($resultc){
    echo"data inserted sucesfuly";
}
else{
    echo mysqli_error($conn); 
}
$sqld="INSERT INTO message (id,senderid,receiverid,isseen,timestamp)
VALUES(NULL,103,155,TRUE,'1:01')";
$resultd=mysqli_query($conn,$sqld);
if($resultd){
    echo"data inserted sucesfuly";
}
else{
    echo mysqli_error($conn); 
}
$sqle="INSERT INTO message (id,senderid,receiverid,isseen,timestamp)
VALUES(NULL,116,100,TRUE,'2:01')";
$resulte=mysqli_query($conn,$sqle);
if($resulte){
    echo"data inserted sucesfuly";
}
else{
    echo mysqli_error($conn); 
}



