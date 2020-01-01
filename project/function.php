<?php


require("connect.php");

function getUsersData($id)
{
	$array = array();
	$q = mysql_query("SELECT * FROM 'meds' WHERE 'user_id'= ".$id);
	while($r = mysql_fetch_assoc($q))
	{
		$array['med_id']=$row['med_id'];
		$array['med_name']=$row['med_name'];
		$array['doctor_name']=$row['doctor_name'];
		$array['pickup_date']=$row['pickup_date'];
		$array['pickup_location']=$row['pickup_location'];
	}
	return $array;
}

function getId($username)
{

	$user = 'root';
$pass = '';
$db = 'medicine';

	$db = mysqli_connect('localhost',$user, $pass, $db);

	$sql = "SELECT user_id FROM user WHERE username='$username'";
	$result -> query($sql);

	$row = $result-> fetch_assoc();
	


	if(!mysqli_query($db, $sql))
	{
	echo 'Not Inserted';
	}
	else
	{
	echo 'inserted';
	}
	while($row = fetch_assoc($sql))
	{
		return $row ['id'];
	}
}


?>