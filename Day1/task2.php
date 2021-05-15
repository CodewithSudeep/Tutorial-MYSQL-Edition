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

$tableName='message';
$tableQuery='id INT(11) NOT NULL AUTO_INCREMENT,
senderid INT(11) NOT NULL ,
receiverid INT(11) NOT NULL ,
isseen BOOLEAN ,
timestamp VARCHAR(30) NOT NULL,
PRIMARY KEY(id)';

 function createTable($conn,$tableName, $tableQuery)
 {

 if(mysqli_query($conn,"CREATE TABLE IF NOT EXISTS $tableName($tableQuery)"))
 {
     echo "<br/>Table '$tableName' created or already exists.<br>";
 }
 else
 {
     echo"error creating table:".mysqli_error($conn);

 }
}
createTable($conn,$tableName, $tableQuery);

?>