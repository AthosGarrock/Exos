<nav>
	<ul>
		<li><a href="#">Accueil</a></li>
		<li><a href="#">Profil</a></li>
		<li><a href="#">Shop</a></li>
	</ul>

	<?php  

	//Vérifie si un user est connecté avant d'afficher 
		if (!array_key_exists('id', $_SESSION) && !array_key_exists('id', $_COOKIE)) { ?>
			
			<form action="" method="POST">
				<label for="username">Pseudo :</label>
				<input type="text" name="username" id="username" required>
				<label for="pass">Mot de passe :</label>
				<input type="password" id="password" name="password" required>
				<input type="checkbox">
				<label for="">: Se souvenir de moi</label>
				<input type="submit" value="tester">
			</form>
	
		<?php }
	?>
</nav>