<?php
$username = filter_input(INPUT_POST, 'Username');
$password = filter_input(INPUT_POST, 'Password');

if (!empty($username)){
if (!empty($password)){

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="hnymn";

$conn= new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
   die('Connect Error ('.mysqli_connect_error().')'
       .mysqli_connect_error());
	   
}

   else{
       $sql= "INSERT INTO admin (Username, Password)
	   values ('$username' , '$password')";
	   if($conn->query($sql)){
		   echo "new record is inserted";
	   }
	   else{
		   echo "Error: ".$sql."<br>".$conn->error;
	   }
	   $conn->close();
	   
   }
}
else{
	echo "Password should not be empty";
	die();
}
}
else{
	echo "Username should not be empty";
	die();
}





?>