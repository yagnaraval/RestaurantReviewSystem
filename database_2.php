<?php


$ray_name= $_POST['name'];
$ray_email = $_POST['email'];

$ray_sub = $_POST['subject'];

$message= $_POST['message'];

$servername = "localhost";
$username = "root";
$password = "";
$database="ray";


// Create connection
$conn = new mysqli($servername, $username, $password,$database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql= "INSERT INTO ray2 VALUES('$ray_name','$ray_email','$ray_sub','$message')";
$sql2 ="SELECT * FROM ray2";
if(mysqli_query($conn, $sql)) {
    echo "Records inserted successfully.";
    
   
} else{
    echo "ERROR";
}


?>