<?php

$servername = "localhost";
$username = "";
$password = "";
$dbname = "student";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
 
 if ($conn->connect_error) 
 {
    die("Connection failed: " . $conn->connect_error);
 } 
// echo "Connected successfully"; 
 
 
    if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['surname']) &&isset($_POST['username']) && isset($_POST['password']))
	{
        $name = $_POST['name'];
		$age = $_POST['age'];
		$surname=$_POST['surname'];
		$username=$_POST['username'];
     	$password = $_POST['password'];
	}
	
$sql = "INSERT INTO user_info (name,age,surname,username,password) VALUES ('$name','$age','$surname','$username','$password')";

if ($conn->query($sql) === TRUE) 
{
  echo "You have registered ";
} 

else 
{
  //  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();	
	
?>

<html>
<style>

body{
   background-color:green;
}
</style>
<body>

<center> <h1> You have Registered Successfully </h1> </center>
</body>
</html>