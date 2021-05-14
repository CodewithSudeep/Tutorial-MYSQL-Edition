<?php
//fetch all data from database and print them in html table
require '../connection.php';
$data = "SELECT * from message";
$final = mysqli_query($conn,$data);

$data1 = "SELECT * from Books";
$final1 = mysqli_query($conn,$data1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFO</title>
    <style>
    .container{
        width:70%;
        border-radius:20px;
        margin: 200px auto;
        padding:50px;
        display:flex;
        justify-content: space-around;
        background-color:white;
    }
    body{
        background-color:#5f27cd;
    }

               table,th,td{
           border :3px solid black;
           border-collapse:collapse;
           font-size: 1.5rem;
       }
       table tr:nth-child(odd){
           background-color:#cd84f1;
       }
       table tr:nth-child(even){
           background-color: #c56cf0;
       }
       table th{
           color:white;
           background-color:black;
       }
    </style>
</head>
<body>
     <div class="container">
         <div class="table1">
         <h1>Message Data</h1>
          <table>
          <tr>
          <th>S.N</th>
          <th>Sender ID</th>
          <th>Receiver ID</th>
          <th>Status(ISSEEN)</th>
          <th>Timestamp</th>
          </tr>
          <?php
          if($final){
            while($row = mysqli_fetch_assoc($final)){
                echo "<tr>
                  <td>".$row['id']."</td>
                  <td>".$row['senderid']."</td>
                  <td>".$row['receiverid']."</td>
                  <td>".$row['isseen']."</td>
                  <td>".$row['timestamp']."</td>
                </tr>";
            }
          }else{
              echo "Data fetch error";
          }

          ?>
          </table>
         </div>
         <div class="table2">
         <h1>Books Data</h1>
          <table>
          <tr>
          <th>S.N</th>
          <th>Book Name</th>
          <th>Author</th>
          <th>Price</th>
          </tr>
          <?php
          if($final1){
            while($row1 = mysqli_fetch_assoc($final1)){
                echo "<tr>
                  <td>".$row1['id']."</td>
                  <td>".$row1['bookname']."</td>
                  <td>".$row1['author']."</td>
                  <td>Rs ".$row1['price']."</td>
                </tr>";
            }
          }else{
              echo "Data fetch error";
          }

          ?>
          </table>
         </div> 
     </div>
</body>
</html>
