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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hnymn";

$conn = new mysqli($servername, $username, $password, $dbname);

if(mysqli_connect_error()){
   die('Connect Error ('.mysqli_connect_error().')'
       .mysqli_connect_error());
	   
}

$sql = "SELECT customer.CoupleID, customer.Name, customer.Package, customer.Space FROM customer WHERE customer.Space = 'NASA' ORDER BY customer.CoupleID";

$result = $conn->query($sql);

if ($result->num_rows>0):?>
		 <table>
		<tr>
		<th>Couple ID</th>
		<th>Name</th>
		<th>Package</th>
		<th>Space center</th>
		</tr>

		<?php while($row = $result->fetch_assoc()):?>
				<tr>
				<td><?php echo $row["CoupleID"];?></td>
				<td><?php echo $row["Name"];?></td>
				<td><?php echo $row["Package"];?></td>
				<td><?php echo $row["Space"];?></td>
				</tr>;
		<?php endwhile;?>
		</table>;
<?php else:?>
	
		<h1>0 results</h1>;
	
	<?php endif;

$conn->close();
?>

</body>
</html>