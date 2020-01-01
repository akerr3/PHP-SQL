<?php 


$user = 'root';
$pass = '';
$db = 'medicine';

$conn = mysqli_connect('localhost',$user, $pass, $db);


if(!$db)
{
	echo 'Not Connected To Server';
}



	if(!mysqli_select_db($conn, 'user'))
	{
	}



		$sql = "SELECT * FROM meds";
		$result = mysqli_query($conn, $sql) or die("BAD QUERY: $sql");

		echo "<table border ='1'>";
		echo "<tr><td>med_id</td><td>Medicine Name</td><td>Doctor ID</td><td>Pickup Date</td><td>Pickup Location</td><td>Manufacturer ID</td></tr>";
		while($row = mysqli_fetch_assoc($result))
		{

			echo "<tr><form action =update2.php method=POST>";
			echo "<td><input type = text name = med_id value = '".$row['med_id']."'></td>";
			echo "<td><input type = text name = med_name value = '".$row['med_name']."'></td>";
			echo "<td><input type = text name = doctor_id value = '".$row['doctor_id']."'></td>";
			echo "<td><input type = text name = pickup_date value = '".$row['pickup_date']."'></td>";
			echo "<td><input type = text name = pickup_location value = '".$row['pickup_location']."'></td>";
			echo "<td><input type = text name = usern value = '".$row['usern']."'></td>";
			echo "<td><input type = text name = man_id value = '".$row['man_id']."'></td>";
			echo "<td><input type=submit>";
			echo "</form></tr>";
		}
	



?>