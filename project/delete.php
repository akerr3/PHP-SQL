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
		echo "<tr><td>medid</td><td>name</td><td>docname</td><td>date</td><td>location</td><td>username</td></tr>";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>{$row['med_id']}</td><td>{$row['med_name']}</td><td>{$row['doctor_id']}</td><td>{$row['pickup_date']}</td><td>{$row['pickup_location']}</td><td>{$row['usern']}</td>";
		}



?>
<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<form action="deleteMed.php" method = "POST">
		Enter the Medicine ID number of the Medicine you would like to remove:<input type="text" name ="med_id">
		<input type="submit" value ="Delete">	</form>
		<br>

		
		<a href ="form2.php">Add Medicine</a>
		<br>
		<a href = "adminlist.php">View List of Medicines</a>
		<br>
		<a href = "index.php">Logout</a>
		<br><br>
</body>
</html>
