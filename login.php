<?php

$servername = "localhost";
$username = "";
$password = "";
$dbname = "student";

if(!empty($_POST['username']) && !empty($_POST['password'])) {
	
    $username = $_POST['username'];  
    $password = $_POST['password'];  
  
    $con=mysql_connect('localhost','root','')
	or die(mysql_error());  
    mysql_select_db('student')
	or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM user_info WHERE username='".$username."' AND password='".$password."'");  
    
	$numrows=mysql_num_rows($query);  
	
    if($numrows!=0)  
    {  
     
	 while($row=mysql_fetch_assoc($query))  
       {  
        $dbusername=$row['username'];  
        $dbpassword=$row['password'];  
       }  
  
       if($username == $dbusername && $password == $dbpassword)  
         {  
          session_start();  
          $_SESSION['sess_user']=$username;  
          echo "Login Successfully"; 
         }  
    }
	
	else
	{  
      echo "Invalid username or password!";  
    }  
  
}

else
{  
  echo "All fields are required!";  
}    
	
?>

<html>
<style>

body
{
background-color:green;
}
</style>
<body>

<center> <h1> You have Logined Successfully </h1> </center>
</body>
</html>