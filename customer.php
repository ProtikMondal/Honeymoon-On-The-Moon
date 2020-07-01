<?php
session_start();
//$couple = filter_input (INPUT_POST, 'coupleID');
$name = filter_input(INPUT_POST, 'Name');
$nationality= filter_input(INPUT_POST, 'Nationality');
$passport = filter_input(INPUT_POST,'Passport');
$spouse = filter_input(INPUT_POST,'SpouseName');
$spousepass = filter_input(INPUT_POST,'SpousePass');
$address = filter_input(INPUT_POST,'Address');
$phone = filter_input(INPUT_POST,'Phone');
$card = filter_input(INPUT_POST,'CardNumber');
$email = filter_input(INPUT_POST,'Email');
$package = filter_input(INPUT_POST,'Package');
$space = filter_input(INPUT_POST,'Space');



//if (!empty ($couple)){
if (!empty($name)){
	if (!empty($nationality)){
		if (!empty($passport)){
			if (!empty($spouse)){
				if (!empty($spousepass)){
						if (!empty($address)){
							if (!empty($phone)){
									if (!empty($card)){
										if (!empty($email)){
											if (!empty ($package)){
												if (!empty ($space)){
													$_SESSION['pport']= $passport ;
													header ( "location: join2.php");

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
       $sql= "INSERT INTO customer (PassportNumber, Name, Phone, Address, Nationality, SpouseName, SpousePassport, VisaCard, Email, Package, Space)
	   values ('$passport', '$name','$phone', '$address', '$nationality', '$spouse', '$spousepass', '$card', '$email', '$package', '$space')";
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
												echo "space should not be empty";
												die();
												}
												}
												else{
												echo "pacakage should not be empty";
												die();
												}
												}

											else{
												echo "Email should not be empty";
												die();
}
}
										else{
											echo "card should not be empty";
											die();
}

							}
							else{
	echo "Phone should not be empty";
	die();
}
						}
						else{
	echo "address should not be empty";
	die();
}

				}
				else{
	echo "spousepass should not be empty";
	die();
}
			}
			else{
	echo "spouse should not be empty";
	die();
}
		}
		else{
	echo "passport should not be empty";
	die();
}
	}
	else{
	echo "nationality should not be empty";
	die();
}
}
else{
	echo "name should not be empty";
	die();
}








?>