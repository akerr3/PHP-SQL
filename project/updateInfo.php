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

	while($rows = mysqli_fetch_assoc($result1))
	{

		$check_username = $rows['username'];
    	$check_password = $rows['password'];

    	if(($Name == $check_username) && ($Password == $check_password))
    	{

		$sql = "SELECT * FROM user WHERE username = '$Name'";
		$result = mysqli_query($conn, $sql) or die("BAD QUERY: $sql");

		echo "<table border ='1'>";
		echo "<tr><td>User Name</td><td>First Name</td><td>Last Name</td><td>Address</td><td>Email</td></tr>";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><form action =update.php method=POST>";
			echo "<td><input type = text name = username value = '".$row['username']."'></td>";
			echo "<td><input type = text name = firstname value = '".$row['firstname']."'></td>";
			echo "<td><input type = text name = lastname value = '".$row['lastname']."'></td>";
			echo "<td><input type = text name = address value = '".$row['address']."'></td>";
			echo "<td><input type = text name = email value = '".$row['email']."'></td>";
			echo "<input type=hidden name=user_id value='".$row['user_id']."'>";
			echo "<td><input type=submit>";
			echo "</form></tr>";
		}
	}
	}



?>