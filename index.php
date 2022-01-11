<?php

if(isset($_POST['ans_one'])){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survey";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
  //echo "Connected successfully";
  //echo "<br>";
}

// Database Creation
//$sql = "CREATE DATABASE survey";
// To run the query
//$result = mysqli_query($conn, $sql);
// To ceck wheteher the database is created or not
//echo var_dump($result);


$ans_one = $_POST['ans_one'];
$ans_two = $_POST['ans_two'];
$ans_three = $_POST['ans_three'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO `surveytb` (`ans_one`, `ans_two`, `ans_three`, `name`, `email`, `date`) VALUES ('$ans_one', '$ans_two', '$ans_three', '$name', '$email', current_timestamp());";
//$result = mysqli_query($conn, $sql);

// To check whether the data is inserted successfully
if ($conn->query($sql) === true) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

