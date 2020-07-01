
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
		border: 1px solid black;
}
</style>
</head>
<body>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hnymn";

$conn = new mysqli($servername, $username, $password, $dbname);

if(mysqli_connect_error()){
   die('Connect Error ('.mysqli_connect_error().')'
       .mysqli_connect_error());
	   
}
$tmppssport = $_SESSION['pport'];
$sql = "SELECT *  FROM package join customer ON package.PName = customer.Package join space_center ON customer.Space = space_center.Center WHERE customer.PassportNumber= '$tmppssport' ORDER BY customer.CoupleID";

$result = $conn->query($sql);
?>

		 <table>
		<tr>
		<th>Couple ID</th>
	<th>Name</th>
		<th>Package</th>
		<th>Space center</th>
			

        <th>TotalCost</th>
		</tr>

		<?php while($row = $result->fetch_assoc()):?>
		
				<tr>
				<td><?php echo $row["CoupleID"];?></td>
				<td><?php echo $row["Name"];?></td>
				<td><?php echo $row["Package"];?></td>
				<td><?php echo $row["Space"];?></td>
         
				<td><?php echo $row["Cost2"]+$row["Cost1"];?></td>
				</tr>;
		<?php endwhile;?>
		</table>;
		<p>Please send a mail at <B><a href="https://www.google.com/gmail/">admin005_hnymn@gmail.com</B></a>
		if you want to update any data.
		</p>
		
		
	
	

<?php $conn->close();
?>

</body>
</html>