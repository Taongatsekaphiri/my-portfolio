<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "my_data";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn);
}
else{
echo "Connected successfully";}
echo "<br>"; 

$name= $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$sql = "INSERT INTO user values ('$name','$email','$message')";

if(mysqli_query ($conn ,$sql)){
  echo"data received";
}
else{
  echo"data not sent $sql.".mysqli_error($conn);
}
    
?>