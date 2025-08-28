<?php

// connection
$host="localhost";
$username="root";
$password="";
$database="TODOAPP";

$conn = mysqli_connect($host,$username,$password,$database);

if(!$conn)
{
     echo mysqli_connect_error();
}else{
    echo "connection successfully";
}

//create todoapp
$sql = "CREATE DATABASE IF NOT EXISTS TODOAPP";
mysqli_query($conn, $sql);

//create users
$sql = "CREATE TABLE IF NOT EXISTS `user`(
    id INT  PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    phone VARCHAR(20)
)";
mysqli_query($conn, $sql);

//create tasks
$sql = "CREATE TABLE IF NOT EXISTS `task`(
    id INT  PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES `user`(id)
)";
mysqli_query($conn, $sql);

mysqli_close($conn);



