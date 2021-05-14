<?php
//insert 5 sample data in books and message table created in task2 and task3
require '../connection.php';

$sql1 = "INSERT INTO message(id,senderid,receiverid,isseen,timestamp) VALUES (NULL,'100','200',TRUE,'2:30')";
$result1 = mysqli_query($conn,$sql1);
if($result1){
    echo "Data inserted successfully <br/>";
}else{
    echo mysqli_error($conn)."<br/>";
}


$sql2 = "INSERT INTO message(id,senderid,receiverid,isseen,timestamp) VALUES (NULL,'101','201',FALSE,'2:31')";
$result2 = mysqli_query($conn,$sql2);
if($result2){
    echo "Data inserted successfully <br/>";
}else{
    echo mysqli_error($conn)."<br/>";
}


$sql3 = "INSERT INTO message(id,senderid,receiverid,isseen,timestamp) VALUES (NULL,'102','202',TRUE,'12:00')";
$result3 = mysqli_query($conn,$sql3);
if($result3){
    echo "Data inserted successfully <br/>";
}else{
    echo mysqli_error($conn)."<br/>";
}

$sql4 = "INSERT INTO message(id,senderid,receiverid,isseen,timestamp) VALUES (NULL,'103','203',TRUE,'1:30')";
$result4 = mysqli_query($conn,$sql4);
if($result4){
    echo "Data inserted successfully <br/>";
}else{
    echo mysqli_error($conn)."<br/>";
}
$sql5 = "INSERT INTO message(id,senderid,receiverid,isseen,timestamp) VALUES (NULL,'104','204',FALSE,'4:30')";
$result5 = mysqli_query($conn,$sql5);
if($result5){
    echo "Data inserted successfully <br/>";
}else{
    echo mysqli_error($conn)."<br/>";
}

//using insert multiple 
//for books
//extra senicolon before last data very important as well as (.) for concat
$sql = "INSERT INTO Books(id,bookname,author,price) VALUES (NULL,'REVOLUTION-2020','Chetan Bhagat','500');";
$sql .="INSERT INTO Books(id,bookname,author,price) VALUES (NULL,'Mahabharat','Balmaiki','1000');";
$sql .="INSERT INTO Books(id,bookname,author,price) VALUES (NULL,'Summer love','ABC','100');";
$sql .="INSERT INTO Books(id,bookname,author,price) VALUES (NULL,'LOO','Govinda prasad','1000');";
$sql .="INSERT INTO Books(id,bookname,author,price) VALUES (NULL,'XYZ','Bibek','700')";
if(mysqli_multi_query($conn,$sql)){
    echo "data successfully stored";
}else{
    "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>