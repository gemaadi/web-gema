<!DOCTYPE html>
<html>
<head>
	<title>PHP FORM</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="nama" placeholder="Isikan Nama">
		<input type="submit" name="submit" value="cek">
	</form>
	<?php
		echo $_POST["nama"];
		echo $_POST["submit"];
	?>
</body>
</html>