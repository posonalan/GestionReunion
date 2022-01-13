<?php

class Utilisateurs 
{

	/*****************Attributs***************** */

	private $_idUtilisateur;
	private $_nomUtilisateur;
	private $_prenomUtilisateur;
	private $_emailUtilisateur;
	private $_motDePasseUtilisateur;
	private $_validationUtilisateur;
	private $_idRole;
	

	/***************** Accesseurs ***************** */


	

	public function getIdUtilisateur()
	{
		return $this->_idUtilisateur;
	}

	public function setIdUtilisateur($idUtilisateur)
	{
		$this->_idUtilisateur = $idUtilisateur;
	}

	public function getNomUtilisateur()
	{
		return $this->_nomUtilisateur;
	}

	public function setNomUtilisateur($nomUtilisateur)
	{
		$this->_nomUtilisateur = $nomUtilisateur;
	}

	public function getPrenomUtilisateur()
	{
		return $this->_prenomUtilisateur;
	}

	public function setPrenomUtilisateur($prenomUtilisateur)
	{
		$this->_prenomUtilisateur = $prenomUtilisateur;
	}

	public function getEmailUtilisateur()
	{
		return $this->_emailUtilisateur;
	}

	public function setEmailUtilisateur($emailUtilisateur)
	{
		$this->_emailUtilisateur = $emailUtilisateur;
	}

	public function getMotDePasseUtilisateur()
	{
		return $this->_motDePasseUtilisateur;
	}

	public function setMotDePasseUtilisateur($motDePasseUtilisateur)
	{
		$this->_motDePasseUtilisateur = $motDePasseUtilisateur;
	}

	public function getValidationUtilisateur()
	{
		return $this->_validationUtilisateur;
	}

	public function setValidationUtilisateur($validationUtilisateur)
	{
		$this->_validationUtilisateur = $validationUtilisateur;
	}

	public function getIdRole()
	{
		return $this->_idRole;
	}

	public function setIdRole($idRole)
	{
		$this->_idRole = $idRole;
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
		return "<div style=color:pink style=background-color:white><br>*****<br>IdUtilisateur : ".$this->getIdUtilisateur().
		"<br> Nom : ".$this->getNomUtilisateur().
		"<br> Prenom : ".$this->getPrenomUtilisateur().
		"<br> Email : ".$this->getEmailUtilisateur().
		"<br> MotDePasse : ".$this->getMotDePasseUtilisateur().
		"<br> Validation : ".$this->getValidationUtilisateur().
		"<br> Role : ".$this->getIdRole().
		"<br> ***** <br></div>";
	}
}