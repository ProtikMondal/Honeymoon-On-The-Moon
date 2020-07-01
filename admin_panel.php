<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>

<div id="header">
<center>
<br>
<h3> Welcome to Admin Panel</h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="update_data.php" target="_blank">Update data</a></li>
	<li><a href="delete_data.php" target="_blank"> Delete data </a></li>
	<li><a href="search_data.php" target="_blank"> Search data </a></li>
	<li><a href="admin_Login.html" target="_self"> Log out </a></li>
	
 </ul>	
</div>

<div id="data">
<br><br>

<center><h1>Data available</h1></center>
<?php
    include 'connection.php';
	
	//add error_reporting(0); to remove errors 
	
	
	$sql = "SELECT * FROM customer";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo "<h4>Couple ID: </h4>" . $row["CoupleID"]. "<br>" . "  Passport number: " . $row["PassportNumber"].  " <br> " .  "Name: " . $row["Name"] .  "<br>" . "Phone: " . $row["Phone"]. "<br>". "Address: " . $row["Address"] . "<br>" . "Nationality: " . $row["Nationality"]. "<br>".  "Spouse Name: " . $row["SpouseName"]. "<br>". "SpousePass: " . $row["SpousePassport"]. "<br>". "Visa: " . $row["VisaCard"]. "<br>". "Email: " . $row["Email"]. "<br>". "Package: " . $row["Package"]. "<br>". "Space: " . $row["Space"]. "<br>";
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?>
</div>

</body>
</html>