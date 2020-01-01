<?php 


$user = 'root';
$pass = '';
$db = 'medicine';

$conn = mysqli_connect('localhost',$user, $pass, $db);


if(!$db)
{
	echo 'Not Connected To Server';
}



	if(!mysqli_select_db($conn, 'meds'))
	{
	}


$sql = "UPDATE meds SET med_name = '$_POST[med_name]', doctor_id = '$_POST[doctor_id]', pickup_date='$_POST[pickup_date]', pickup_location='$_POST[pickup_location]' WHERE med_id='$_POST[med_id]'";

if(mysqli_query($conn, $sql))
{
	echo "Done";
}
else
echo"NOPEEEE";





?>