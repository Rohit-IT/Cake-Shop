<?php
/*
$servername = "localhost";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . die('Error: ' . mysqli_error($conn));
} 
echo "Connected successfully";


mysqli_select_db($conn,"cake")or die('Error: ' . mysqli_error($conn));

//Insert operation


$sql="insert into data (Firstname,Email,Phone,City,Message) VALUES ('$_POST[Firstname]','$_POST[Email]','$_POST[Phone]','$_POST[City]','$_POST[Message]')";


mysqli_query($conn,$sql)or die(mysqli_error());

if (!$sql) {
    die("Connection failed: " . mysqli_error());
} 

echo "Record inserted successfully";
*/


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($conn){
	echo "Connection Successfull";
}
/*
$sql = "INSERT INTO form (first_name,last_name,email,phone,message)
VALUES ('John', 'Doe', 'john@example.com','8888888888','Hiiiiiiiiii How are you!!!')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
*/


if(isset($_POST['ORDER'])){

	$Name = $_POST['Name'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$Phone = $_POST['Phone'];
	$caketype = $_POST['caketype'];
	$cakeflavour = $_POST['cakeflavour'];
	$Quantity = $_POST['Quantity'];








$sql = "INSERT INTO order1 (Name, Address, Email,Phone,CakeType,Cakeflavour,Quantity) VALUES ('$Name', '$Address', '$Email','$Phone','$caketype','$cakeflavour','$Quantity')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


		$to='rjdatabase007@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$Name."\n"."Address :".$Address."\n"."Email :".$Email."\n"."Phone :".$Phone."\n"."caketype :".$caketype."\n"."Cakeflavour :".$cakeflavour."\n"."Quantity:".$Quantity;
		$headers="From: ".$Email;
       
   
 
   
		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$Name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}

 
// Close connection
mysqli_close($conn);
}
