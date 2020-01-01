<?php
$Name = $_POST['username'];
$Password = $_POST['pass'];

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

	$check = "SELECT username, password FROM user";
	$result1 = mysqli_query($conn, $check) or die("BAD QUERY: sql");

	if(($Name == "andrewkerr13") && ($Password == "cosc457"))
	{
		header('Location: adminform.php');
   		exit;
	}

	while($rows = mysqli_fetch_assoc($result1))
	{

		$check_username = $rows['username'];
    	$check_password = $rows['password'];

    	if(($Name == $check_username) && ($Password == $check_password))
    	{

		$sql = "SELECT * FROM meds WHERE usern = '$Name'";
		$result = mysqli_query($conn, $sql) or die("BAD QUERY: $sql");

		echo "<table border ='1'>";
		echo "<tr><td>medical id</td><td>name</td><td>doctor ID</td><td>date</td><td>location</td><td>username</td></tr>";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>{$row['med_id']}</td><td>{$row['med_name']}</td><td>{$row['doctor_id']}</td><td>{$row['pickup_date']}</td><td>{$row['pickup_location']}</td><td>{$row['usern']}</td>";
		}
	}
	}



?>