<?php
	include 'connection.php';
	
	$id=filter_input(INPUT_POST, 'CID');
	$pp=filter_input(INPUT_POST, 'PPN');
	$name=filter_input(INPUT_POST, 'name');
	$phn=filter_input(INPUT_POST, 'phn');
	$adrs=filter_input(INPUT_POST, 'adrs');
	$nation=filter_input(INPUT_POST, 'nation');
	$spname=filter_input(INPUT_POST, 'SPname');
	$Spp=filter_input(INPUT_POST, 'sp_pno');
	$visa=filter_input(INPUT_POST, 'visa');
	$email=filter_input(INPUT_POST, 'mail');
	$pkg=filter_input(INPUT_POST, 'pkg');
	$spc=filter_input(INPUT_POST, 'spc');
	
	$sql1="select* from customer where coupleID='".$id."'";
	//$result1 == mysqli_query($conn, $sql1);
	$result1=$conn->query($sql1);
	if ($result1->num_rows> 0) {   
		while($row = $result1->fetch_assoc()) {
			echo "Before update";
			echo "<h4>Couple ID: </h4>" . $row["CoupleID"]. "<br>" . "  Passport number: " . $row["PassportNumber"].  " <br> " .  "Name: " . $row["Name"] .  "<br>" . "Phone: " . $row["Phone"]. "<br>". "Address: " . $row["Address"] . "<br>" . "Nationality: " . $row["Nationality"]. "<br>".  "Spouse Name: " . $row["SpouseName"]. "<br>". "SpousePass: " . $row["SpousePassport"]. "<br>". "Visa: " . $row["VisaCard"]. "<br>". "Email: " . $row["Email"]. "<br>". "Package: " . $row["Package"]. "<br>". "Space: " . $row["Space"]. "<br>";
		}
	}
	
	$sql2="update customer 
		  set PassportNumber='".$pp."',
			  Name='".$name."',
			  Phone='".$phn."', 
			  Address='".$adrs."',
			  Nationality='".$nation."',
			  SpouseName='".$spname."',
			  SpousePassport='".$Spp."',
			  VisaCard='".$visa."',
			  Email='".$email."',
			  Package='".$pkg."',Space='".$spc."',
		  where coupleID='".$id."'";
	$result2=$conn->query($sql2);
	if ($result2->num_rows> 0) {   
		while($row = $result2->fetch_assoc()) {
			echo "Before update";
			echo "<h4>Couple ID: </h4>" . $row["CoupleID"]. "<br>" . "  Passport number: " . $row["PassportNumber"].  " <br> " .  "Name: " . $row["Name"] .  "<br>" . "Phone: " . $row["Phone"]. "<br>". "Address: " . $row["Address"] . "<br>" . "Nationality: " . $row["Nationality"]. "<br>".  "Spouse Name: " . $row["SpouseName"]. "<br>". "SpousePass: " . $row["SpousePassport"]. "<br>". "Visa: " . $row["VisaCard"]. "<br>". "Email: " . $row["Email"]. "<br>". "Package: " . $row["Package"]. "<br>". "Space: " . $row["Space"]. "<br>";
		}
	}
?>