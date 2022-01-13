<?php

class Roles
{

	/*****************Attributs***************** */

	private $_idRole;
	private $_libelleRole;

	

	/***************** Accesseurs ***************** */

	public function getIdRole()
	{
		return $this->_idRole;
	}

	public function setIdRole($idRole)
	{
		$this->_idRole = $idRole;
	}

	public function getLibelleRole()
	{
		return $this->_libelleRole;
	}

	public function setLibelleRole($libelleRole)
	{
		$this->_libelleRole = $libelleRole;
	}


	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
 		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
 		foreach ($data as $key => $value)
		{
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/*****************Autres Méthodes***************** */

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString()
	{
		return "<div style=color:pink style=background-color:white><br>*****<br>
        IdRole : ".$this->getIdRole().
		"<br> Libelle : ".$this->getLibelleRole().
		"<br> ***** <br></div>";
	}


}