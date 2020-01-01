<?php include "config.php"
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>Delete Medical Records</title>
	<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
</head>
<body style="padding-top: 100px;">

<?php
$fetchQuery = mysql_query("select * from medicine.user");
?>

	<div class="container">
	<table class="table table-condensed table-boredered">
		<tr>
			<th>username</th>
			<th>password</th>
		</tr>

		<?php
		$sr = 1;
		while ($row = mysql_fetch_array($fetchQuery)) {?>
			<tr>

			<form action ="" method = "post" role = "form">
			<td><?php echo $sr;?> </td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['password'];?></td>
			<td>
				<input type = "checkbox" name = "keyToDelete" value = "<?php echo $row['id'];?>">
			</td>
			<td>
				<input type = "submit" name = "submitDeletion" class = "btn btn-info">
			</td>
			</form>
			</tr>
		<?php $sr++; }
		?>
	</table>

</body>
</html>