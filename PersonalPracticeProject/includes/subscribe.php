<?php  

// VERIFIE QU'UN UTILISATEUR NE SOIT PAS DEJA CONNECTE
if (isset($_SESSION['id'])) {
	header('location:main.php');
}

//VERIFICATIONS DU FORMULAIRE - Vérifie qu'il n'a pas déja été soumis, et que les champs ne soient pas vides.
if (!empty($_POST['username']) AND !empty($_POST['password'])) {
	$req = $db->prepare('INSERT INTO players VALUES (:username, :password)');

	$val = [ 	
		'username' => $_POST['username'],
		'password' => password_hash($_POST['password'])
	];
	
	$req->execute($val);

}
// else{
// 	header('location:subscribe.php?err=invalid');
// }

if ($_GET['err']) {
	# code...
}

?>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>