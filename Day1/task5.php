<?php



//fetch all data from database and print them in html table
require'../connection.php';

$sqlf="SELECT * from message";
$resultf=mysqli_query($conn,$sqlf);

$sqlf1="SELECT * from books";
$resultf1=mysqli_query($conn,$sqlf1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type ="text/css">
    table,th,td{
        border :1px solid black ;
      border-spacing:0px;

    }
    </style>
</head>

<body>
<div class ="container">
<div class="table 1">
<h1>message data</h1>
<table>
<tr>
<th >S.N</th>
<th >senderid</th>
<th>recieverid</th>
<th>isseen</th>
<th >timesatmp</th>
</tr>
<?php
if($resultf){
    while($row=mysqli_fetch_assoc($resultf)){
       echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['senderid']."</td>
        <td>".$row['receiverid']."</td>
        <td>".$row['isseen']."</td>
        <td>".$row['timestamp']."</td>
        </tr>";

    }
}
else{
    echo"no data found in table";
}
?>

</table>
</div>
<div class="table 2">
<h1>books info</h1>
<table>
<tr>
<th>id</th>
<th>bookname</th>
<th>author</th>
<th>price</th>
</tr>
<?php
if($resultf1){
    while($row=mysqli_fetch_assoc($resultf1)){
        echo"<tr>
        <td>".$row['id']."</td>
        <td>".$row['bookname']."</td>
        <td>".$row['author']."</td>
        <td>".$row['price']."</td>
        </tr>";

    }
}
?>


</table>

</div>
</div>

</body>
</html>