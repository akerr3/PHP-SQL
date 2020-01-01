<?php
$Name = $_POST['store_location'];

$user = 'root';
$pass = '';
$db = 'medicine';

$conn = mysqli_connect('localhost',$user, $pass, $db);

if(!$db)
{
}



	if(!mysqli_select_db($conn, 'user'))
	{
	}


		$sql = "SELECT * FROM drugstore WHERE location_name = '$Name'";
		$result = mysqli_query($conn, $sql) or die("BAD QUERY: $sql");

		echo "<table border ='1'>";
		echo "<tr><td>Location Name</td><td>Phone Number</td><td>State</td><td>Zip Code</td></tr>";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>{$row['location_name']}</td><td>{$row['phone_number']}</td><td>{$row['state']}</td><td>{$row['zipcode']}</td>";
		}



?>