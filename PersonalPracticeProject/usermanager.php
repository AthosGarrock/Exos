<?php 

require 'user.class.php';
require 'includes/db.php';
/**
* 
*/
class UserManager
{
	
	private $_db;

	function __construct($db)
	{
		$this->setDb($db);
	}

	public function add(User $user){
		$req = $this->_db->prepare('INSERT INTO players(username, password) VALUES(:username, :password)');

		$values = ['username' => $user->getUsername(),
					'password'=> $user->getPassword()];

		$req->execute($values);
	}

	public function update(User $id){
		
		
	}

	public function delete($id){}

	//Récupère un utilisateur via  un paramètre spécifié et retourne l'objet corespondant.
	public function get($username){
		$req = $this->_db->prepare("SELECT * FROM players WHERE username = ?");
		$value = [$username];
		$req->execute($value);
		return new User($req->fetch(PDO::FETCH_ASSOC));

	}

	public function getList(){
		echo "Fonction en développement ! ";
	}

	private function setDb($db){
		$this->_db = $db;
	}

}

$userDB = new UserManager($db);
 ?>