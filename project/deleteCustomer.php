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



		$sql = "SELECT * FROM user";
		$result = mysqli_query($conn, $sql) or die("BAD QUERY: $sql");

		echo "<table border ='1'>";
		echo "<tr><td>username</td><td>first name</td><td>last name</td><td>address</td><td>email</td></tr>";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>{$row['username']}</td><td>{$row['firstname']}</td><td>{$row['lastname']}</td><td>{$row['address']}</td><td>{$row['email']}</td>";
		}



?>
<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<form action="deleteCus.php" method = "POST">
		Enter the Customer Username number of the Medicine you would like to remove:<input type="text" name ="username">
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
