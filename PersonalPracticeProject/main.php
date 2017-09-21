<!DOCTYPE html>
<?php 
	session_start();
	if (array_key_exists('username', $_POST) OR array_key_exists('password', $_POST)) {
		include 'login.php';
	}
	
 ?>
<html>
<head>
	<title>Practice Project</title>
	<meta charset="utf-8" name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<?php include 'includes/nav.php' ?>

	<main></main>

	<footer></footer>

</body>
</html>