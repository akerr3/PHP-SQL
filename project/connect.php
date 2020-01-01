<?php

$user = 'root';
$pass = '';
$db = 'medicine';

$db = mysqli_connect('localhost',$user, $pass, $db);

echo "Great Work";

if(!$db)
{
	echo 'Not Connected To Server';
}

if(!mysqli_select_db($db, 'user'))
{
	echo 'Database not selected';
}


?>