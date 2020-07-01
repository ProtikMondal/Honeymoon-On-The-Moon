<html>
<head>
<title>Search records</title>
</head>
<body>
<center>
<p><h2>Search records using couple ID or passport number.</h2><br></p>
<form action="search_data.php" method="post">
	<lable>Couple Id: </lable>
	<input type="number" name= "CID" >
	| or |
	<lable>Passport Number: </lable>
	<input type="text" name= "PID">
	<br><br>
	<input type="submit" name="submit" value="Search">
	</center>
</form>
</body>
</html>

<?php
include 'connection.php';
$x=filter_input(INPUT_POST, 'CID');
$y=filter_input(INPUT_POST, 'PID');

$sql1="select * from customer where coupleID='".$x."'";
$sql2="select * from customer where PassportNumber='".$y."'";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);

if(!empty($x)){
	if ($result1->num_rows> 0) {
   
    while($row = $result1->fetch_assoc()) {
    echo "<h4>Couple ID: </h4>" . $row["CoupleID"]. "<br>" . "  Passport number: " . $row["PassportNumber"].  " <br> " .  "Name: " . $row["Name"] .  "<br>" . "Phone: " . $row["Phone"]. "<br>". "Address: " . $row["Address"] . "<br>" . "Nationality: " . $row["Nationality"]. "<br>".  "Spouse Name: " . $row["SpouseName"]. "<br>". "SpousePass: " . $row["SpousePassport"]. "<br>". "Visa: " . $row["VisaCard"]. "<br>". "Email: " . $row["Email"]. "<br>". "Package: " . $row["Package"]. "<br>". "Space: " . $row["Space"]. "<br>";
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
}else if(!empty($y)){
	if ($result2->num_rows> 0) {
		while($row = $result2->fetch_assoc()) {
			echo "<h4>Couple ID: </h4>" . $row["CoupleID"]. "<br>" . "  Passport number: " . $row["PassportNumber"].  " <br> " .  "Name: " . $row["Name"] .  "<br>" . "Phone: " . $row["Phone"]. "<br>". "Address: " . $row["Address"] . "<br>" . "Nationality: " . $row["Nationality"]. "<br>".  "Spouse Name: " . $row["SpouseName"]. "<br>". "SpousePass: " . $row["SpousePassport"]. "<br>". "Visa: " . $row["VisaCard"]. "<br>". "Email: " . $row["Email"]. "<br>". "Package: " . $row["Package"]. "<br>". "Space: " . $row["Space"]. "<br>";
		}
	}else{
		echo "<h3><center>No user data found!<center></h3>";
	}	
}else{
	echo "<h3><center>Couple ID or Passport Number cannot be empty!<center></h3>";
}
?>