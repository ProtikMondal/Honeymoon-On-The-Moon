<?php
include 'connection.php';
$x=filter_input(INPUT_POST, 'CID');
//$u=mysqli_real_escape_string($conn, $_POST['CID']);
//$cid=$_POST['CID'];
$sql="select * from customer where coupleID='".$x."'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows> 0) {
   
    while($row = $result->fetch_assoc()) {
    echo "<h4>Couple ID: </h4>" . $row["CoupleID"]. "<br>" . "  Passport number: " . $row["PassportNumber"].  " <br> " .  "Name: " . $row["Name"] .  "<br>" . "Phone: " . $row["Phone"]. "<br>". "Address: " . $row["Address"] . "<br>" . "Nationality: " . $row["Nationality"]. "<br>".  "Spouse Name: " . $row["SpouseName"]. "<br>". "SpousePass: " . $row["SpousePassport"]. "<br>". "Visa: " . $row["VisaCard"]. "<br>". "Email: " . $row["Email"]. "<br>". "Package: " . $row["Package"]. "<br>". "Space: " . $row["Space"]. "<br>";
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?>

