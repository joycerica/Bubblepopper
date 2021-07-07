<?php
    $conn1 = new mysqli('localhost', 'root', '');
    //we create the database with the following command;
    $sql = "CREATE DATABASE IF NOT EXISTS question";
    if ($conn1->query($sql) === FALSE){
    return true;
    }

    $tanong = "CREATE TABLE IF NOT EXISTS question.tanong(
        ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, CODE MEDIUMTEXT, USER MEDIUMTEXT)";
    if ($conn1->query($tanong) === FALSE){
    echo "Table not created: ".$conn1->error;
    }
    ?>
?>