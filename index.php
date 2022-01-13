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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div>
            <h2>Thank you for your valuable feedback</h2>
            <hr>
            <p> We sincerely appreciate your insight because it helps us build a better customer experience.
                <br>
                If you have any more questions, or concerns please feel welcome to reach us as we would be more than happy to
                assist.
            </p>
            <button class="btn">
                <a href="mailto: neilprasad1407@gmail.com">Contact Us</a>
            </button>
        </div>
        <div class="foot">
            <a class="social-link" href="https://www.linkedin.com/in/nikhil-kumar-prasad-87a70415a/">
                 <i class="social fa fa-linkedin"></i></a>
            <a class="social-link" href="https://github.com/neil1407"> 
                <i class="social fa fa-github"></i></a>
            <a class="social-link" href="https://www.instagram.com/neilbyahut/"> 
                <i class="social fa fa-instagram"></i></a>
        </div>   
    </div>
   
</body>
</html>