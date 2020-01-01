<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<form action ="homepage.php" method ="POST">
		Username <input type="text" name="username">
		Password <input type="password" name = "pass">
		
		<input type="submit" value ="Login">	</form>
		<br><br><br><br>

	<form action ="updateInfo.php" method ="POST">
		Username <input type="text" name="username">
		Password <input type="password" name = "pass">
		<input type="submit" value ="Update Information">	</form>
		<br><br><br><br>

		<form action ="drugstore.php" method ="POST">
		Search for drugstore by city name <input type="text" name="store_location">
		<input type="submit" value ="Search">	</form>
		<br><br><br><br>

	<form action ="insertUser.php" method ="POST">
		Username <input type="text" name="username">
		Password <input type="password" name = "pass">
		First Name <input type="text" name = "firstname">
		Last Name<input type="text" name = "lastname">
		Address<input type="text" name = "address">
		Email<input type="text" name = "email">
		<br>
		Medical Record ID<input type="text" name = "record_id">

		<input type="submit" value ="Register">	</form>

</body>
</html>