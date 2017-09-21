<?php 
	require '../usermanager.php';

	if (empty($_POST['Pseudo']) OR empty($_POST['password']) ) {
		echo "Veuillez renseigner tous les champs indiqués.";
	}
	else{
		$req = $userDB->get();
	}
 ?>