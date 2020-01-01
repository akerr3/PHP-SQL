<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<form action="administrator.php" method = "POST">
		Medicine Name: <input type="text" name ="med_name">
		Doctor ID: <input type="text" name ="doctor_id">
		Pickup Date:<input type="text" name ="pickup_date">
		Pickup Location:<input type="text" name ="pickup_location">
		User Name:<input type="text" name ="usern">
		Manufacturer ID: <input type="text" name ="man_id">
		<input type="submit" value ="Insert">	</form>
		<br>

		<a href = "adminlist.php">View List of Medicines</a>
		<a href = "delete.php">Delete Medicines</a>
		<a href = "index.php">Logout</a>
</body>
</html>