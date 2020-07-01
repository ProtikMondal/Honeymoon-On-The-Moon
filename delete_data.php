<html>
<head>
<title>Delete Data</title>
</head>
<body>
<p><h2>Delete Data</h2><br></p>
<form method = "post" action = "delete_data.php">
	<lable>Couple Id: </lable>
	<input type="number" name= "CID" >
	<input type="submit" name="submit" value="Delete">
</form>
</body>
</html>

<?php
include 'connection.php';
$x=filter_input(INPUT_POST, 'CID');
$sql1="select * from customer where coupleID='".$x."'";
$result1 = mysqli_query($conn, $sql1);


if($result1->num_rows>0){
	$sql2="delete from customer where coupleID='".$x."'";
	$result2 = mysqli_query($conn, $sql2);
	echo "<h3>Data Deleted</h3>";
}else{
	echo "<h3><center>No user data found!<center><br>Cannot Delete</h3>";
}

?>


