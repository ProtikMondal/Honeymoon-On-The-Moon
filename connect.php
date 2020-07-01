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
	   
	   $uname= mysqli_real_escape_string($conn, $_POST['Username']);
		$pass= mysqli_real_escape_string($conn, $_POST['Password']);
		
      $sql = "select * from admin where Username = '".$uname."' AND Password = '".$pass."' limit 1 ";
	  
	  $result = $conn->query($sql);
	  
	   if($result->num_rows==1){
/* 		   echo "You Have logged in";
 */		   /* $_SESSION['SES'] = $uname; */
		   echo "<script>location.href = 'admin_panel.php' </script>";
	   }
	   else{
		   echo "Wrong Username or Password";
		  

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