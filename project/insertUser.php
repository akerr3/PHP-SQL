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

$Name = $_POST['username'];
$Password = $_POST['pass'];
$FirstName = $_POST['firstname'];
$LastName = $_POST['lastname'];
$Address = $_POST['address'];
$Email = $_POST['email'];
$Record_ID = $_POST['record_id'];
$sql = "INSERT INTO user (username,password,firstname,lastname,address,email,record_id) VALUES ('$Name','$Password','$FirstName','$LastName','$Address','$Email','$Record_ID')";

if(!mysqli_query($db, $sql))
{
	echo 'Not Inserted';
}
else
{
	echo 'inserted';
}

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