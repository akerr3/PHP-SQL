<?php

$user = 'root';
$pass = '';
$db = 'medicine';

$db = mysqli_connect('localhost',$user, $pass, $db);


if(!$db)
{
	echo 'Not Connected To Server';
}

if(!mysqli_select_db($db, 'user'))
{
}

$Med_Name = $_POST['med_name'];
$Doctor_ID = $_POST['doctor_id'];
$Pickup_Date = $_POST['pickup_date'];
$Pickup_Location = $_POST['pickup_location'];
$User_Name = $_POST['usern'];
$Man_ID = $_POST['man_id'];
$sql = "INSERT INTO meds (med_name,doctor_id,pickup_date,pickup_location,usern, man_id) VALUES ('$Med_Name','$Doctor_ID','$Pickup_Date','$Pickup_Location','$User_Name', '$Man_ID')";

if(!mysqli_query($db, $sql))
{
	echo 'Not Inserted';
}
else
{
	echo 'Medicine Inserted!';
}

?>

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
		echo "<tr><td>medid</td><td>name</td><td>doctor ID</td><td>date</td><td>location</td><td>username</td><td>Manufacturer ID</td></tr>";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>{$row['med_id']}</td><td>{$row['med_name']}</td><td>{$row['doctor_id']}</td><td>{$row['pickup_date']}</td><td>{$row['pickup_location']}</td><td>{$row['usern']}</td><td>{$row['man_id']}</td>";
		}



?>
<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<br>
<a href ="form2.php">Add Medicine</a>
<br>
<a href = "delete.php">Delete Medicines</a>
<br>
<a href = "index.php">Logout</a>
<br>
<br>
<br>
<br>
</form>
</body>
</html>
