<?php


$ray_name= $_POST['name'];
$ray_email = $_POST['email'];
$ray_phone = $_POST['phone'];
$ray_food = $_POST['food'];
$ray_order_id = $_POST['order_id'];
$experience = $_POST['experience'];
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
$sql= "INSERT INTO ray VALUES('$ray_name','$ray_email','$ray_phone','$ray_food','$ray_order_id','$experience','$message')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
    
   
} else{
    echo "ERROR";
}


?>