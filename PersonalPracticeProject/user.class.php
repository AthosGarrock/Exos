<?php 

/**
* 
*/
class User
{
    private $id;
	private $username;
	private $password;

	
	function __construct(array $data)
	{
        if (is_array($data)) {
            $this->hydrate($data);
        }
        else{
            throw new Exception("Les paramètres de la classe <b>User</b> sont invalides.", 1);
        }
	}

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $hash
     *
     * @return self
     */
    public function setPassword($hash)
    {
        $this->password = password_hash($hash, PASSWORD_DEFAULT);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    private function hydrate(array $data){
        foreach ($data as $key => $value) { 
            //Génère chaque méthode nécéssaire à partir des clefs de l'array récupérées.
            $method = 'set'.ucfirst($key);
            
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }

    }

}
?>