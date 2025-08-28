<?php
session_start();
 
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


if($_SERVER['REQUEST_METHOD']=="POST")
{
   $title = $_POST['title'];

$sql = "INSERT INTO `task`(`title`) VALUES('$title')";
$result = mysqli_query($conn,$sql); 
if(mysqli_affected_rows($conn)==1)
{
    $_SESSION['sucess'] = "datainserted sucessfully";
}

header("Location: index.php");

}
