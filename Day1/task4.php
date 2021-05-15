<?php
 require '../connection.php';

//insert 5 sample data in books and message table created in task2 and task3



// for books
$sql1 = "INSERT INTO books
        (id, bookname, author, price) 
        VALUES (NULL, 'math', 'ram', 1200)";

        $result1 = mysqli_query($conn, $sql1);
        if ($result1) {
    echo "Data inserted succesfully";
    echo "<br>";
}else{
    echo mysqli_error($conn);
}


$sql2 = "INSERT INTO books
        (id, bookname, author, price) 
        VALUES (NULL, 'eng', 'rik', 300)";

        $result2 = mysqli_query($conn, $sql2);
        if ($result2) {
    echo "Data inserted succesfully";
    echo "<br>";
}else{
    echo mysqli_error($conn);
}



$sql3 = "INSERT INTO books
        (id, bookname, author, price) 
        VALUES (NULL, 'eco', 'raz', 100)";

        $result3 = mysqli_query($conn, $sql3);
        if ($result3) {
    echo "Data inserted succesfully";
    echo "<br>";
}else{
    echo mysqli_error($conn);
}



$sql4 = "INSERT INTO books
        (id, bookname, author, price) 
        VALUES (NULL, 'physic', 'alex', 1300)";

        $result4 = mysqli_query($conn, $sql4);
        if ($result4) {
    echo "Data inserted succesfully";
    echo "<br>";
}else{
    echo mysqli_error($conn);
}




$sql5= "INSERT INTO books
        (id, bookname, author, price) 
        VALUES (NULL, 'chem', 'john', 120)";

        $result5 = mysqli_query($conn, $sql5);
        if ($result5) {
    echo "Data inserted succesfully";
    echo "<br>";
}else{
    echo mysqli_error($conn);
}

//for message


$sql6= "INSERT INTO message
        (id, senderid, receiverid,isseen, timestamp) 
        VALUES (NULL, 101, 110, TRUE, '12:00')";

        $result6 = mysqli_query($conn, $sql6);
        if ($result6) {
    echo "Data inserted succesfully";
    echo "<br>";
}else{
    echo mysqli_error($conn);
}


$sql7= "INSERT INTO message
        (id, senderid, receiverid,isseen, timestamp) 
        VALUES (NULL, 100,103, TRUE, '13:00')";

        $result7 = mysqli_query($conn, $sql7);
        if ($result7) {
    echo "Data inserted succesfully";
    echo "<br>";
}else{
    echo mysqli_error($conn);
}
    
?>
