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


$sql = "UPDATE user SET firstname = '$_POST[firstname]', lastname = '$_POST[lastname]', address='$_POST[address]', email='$_POST[email]' WHERE username='$_POST[username]'";

if(mysqli_query($conn, $sql))
{
	echo "Done";
}
else
echo"NOPEEEE";





?>

<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<br>
<a href ="index.php">Home</a>
<br>
<br>
<br>
<br>
</form>
</body>
</html>