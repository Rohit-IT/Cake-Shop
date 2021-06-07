<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_error());
} 
echo "Connected successfully";
mysqli_select_db($conn,"new")or die(mysqli_error());

$sql = "INSERT INTO form (first_name, last_name, email,phone,message) VALUES ('$_POST[firstName]', '$_POST[lastName]', '$_POST[email]','$_POST[phone]','$_POST[message]')";
if(mysqli_query($conn, $sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
