<?php  
session_start();

include 'usermanager.php';


// VERIFIE QU'UN UTILISATEUR NE SOIT PAS DEJA CONNECTE
if (isset($_SESSION['id'])) {
	header('location:main.php');
}

//VERIFICATIONS DU FORMULAIRE - Vérifie qu'il n'a pas déja été soumis, et que les champs ne soient pas vides.
if (!empty($_POST['username']) AND !empty($_POST['password'])) {
	$userDB->add(new User([$_POST['username'], $_POST['password']]));
	header('location:main.php');
}
else{
	if (!empty($_POST)){
		header('location:subscribe.php?err=invalid');
	}
}

if (isset($_GET['err'])) {
	echo "LOL ERROR";
}

?>
<html>
<head>
	<title>Inscription</title>
</head>
<body>
	<form action="" method="POST">
		<label for="username">Pseudonyme : </label>
		<input type="text" id="username" name="username">
		<label for="password">Mot de passe :</label>
		<input type="password" id="password" name="password">
		<input type="submit" value="Go!">
	</form>
</body>
</html>