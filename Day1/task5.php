<?php
require '../connection.php';

$sql11 = "SELECT * FROM message";
$result11 = mysqli_query($conn, $sql11);
$sql12 = "SELECT * FROM books";
$result12 = mysqli_query($conn, $sql12);


//fetch all data from database and print them in html table
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetching data from database</title>
</head>
<body>
<style>
.table1{

    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 400px;
    border: solid;
}

.table1 tr th{

    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}



</style>



<div>
<h1>MESSAGE</h1>
<table class="table1">
<tr>
<th>Id</th>
<th>Sender-id</th>
<th>Receiver-id</th>
<th>Isseen</th>
<th>Timestamp</th>
</tr>
<?php
if ($result11)
{
while($row = mysqli_fetch_assoc($result11))
{

     echo "<tr>
     <td>".$row['id']."</td>
     <td>".$row['senderid']."</td>
     <td>".$row['receiverid']."</td>
     <td>".$row['isseen']."</td>
     <td>".$row['timestamp']."</td>
   </tr>";
 }
 }
 else
 {
 echo "Data fetch error";
 }



?>

</table>
</div>
<style>
.table2{

    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 400px;
    border: solid;
}

.table2 tr th{

    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}



</style>

<div>
<h1>BOOKS</h1>
<table class="table2">
<tr>
<th>Id</th>
<th>Book Name</th>
<th>Author</th>
<th>Price</th>
</tr>
<?php
if ($result12)
{
while($row = mysqli_fetch_assoc($result12))
{

     echo "<tr>
     <td>".$row['id']."</td>
     <td>".$row['bookname']."</td>
     <td>".$row['author']."</td>
     <td>".$row['price']."</td>
   </tr>";
 }
 }
 else
 {
 echo "Data fetch error";
 }



?>

</table>
</div>
    
</body>
</html>