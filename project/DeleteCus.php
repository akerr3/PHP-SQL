<?php

$user = 'root';
$pass = '';
$db = 'medicine';

$db = mysqli_connect('localhost',$user, $pass, $db);

echo "Medicine Deleted";

if(!$db)
{
	echo 'Not Connected To Server';
}

if(!mysqli_select_db($db, 'user'))
{
}

$Med_ID = $_POST['username'];
$sql = "DELETE FROM user WHERE username = '$Med_ID'";

if(!mysqli_query($db, $sql))
{
	echo 'Not Inserted';
}
else
{
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



		$sql = "SELECT * FROM user";
		$result = mysqli_query($conn, $sql) or die("BAD QUERY: $sql");

		echo "<table border ='1'>";
		echo "<tr><td>username</td><td>first name</td><td>last name</td><td>address</td><td>email</td></tr>";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>{$row['username']}</td><td>{$row['firstname']}</td><td>{$row['address']}</td><td>{$row['email']}</td><td>{$row['record_id']}</td>";
		}



?>
<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
<a href ="form2.php">Add Medicine</a>
<br>
<a href = "delete.php">Delete Medicines</a><br>
<a href = "index.php">Logout</a>
<br>
<br>
<br>
</form>
</body>
</html>