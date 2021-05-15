<?php


require '../connection.php';

// create a table for message with following columns:
    // id:int(11)
    // senderid : int(11)
    // recieverid : int(11)
    // isseen: boolean
    // timestamp: varchar

//hint : 
// function createTable($name, $query)
// {
// queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
// echo "Table '$name' created or already exists.<br>";
// }

// createTable('student',
// 'id int(11) NOT NULL AUTO_INCREMENT,
// user VARCHAR(50),
// pass VARCHAR(16),
// profession VARCHAR(30),
// INDEX(user(6)),
// PRIMARY KEY (id)');



$sql = "CREATE TABLE IF NOT EXISTS message(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    senderid INT(11) NOT NULL,
    receiverid INT(11) NOT NULL,
    isseen boolean,
    timestamp VARCHAR(20) NOT NULL)";
if(mysqli_query($conn,$sql)){
echo "Table message created or already exist";
}else{
echo "Error creating table: " . mysqli_error($conn);
}



?>