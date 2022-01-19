<?php

class Utilisateurs
{

	/*****************Attributs***************** */

	private $_idUtilisateur;
	private $_nom;
	private $_prenom;
	private $_adresseMail;
	private $_telephone;
	private $_motDePasse;

	private $_role;
	private $_pseudo;

	/***************** Accesseurs ***************** */


	public function getIdUtilisateur()
	{
		return $this->_idUtilisateur;
	}

	public function setIdUtilisateur($idUtilisateur)
	{
		$this->_idUtilisateur = $idUtilisateur;
	}

	public function getNom()
	{
		return $this->_nom;
	}

	public function setNom($nom)
	{
		$this->_nom = $nom;
	}

	public function getPrenom()
	{
		return $this->_prenom;
	}

	public function setPrenom($prenom)
	{
		$this->_prenom = $prenom;
	}



	public function getAdresseMail()
	{
		return $this->_adresseMail;
	}

	public function setAdresseMail($adresseMail)
	{
		$this->_adresseMail = $adresseMail;
	}

	public function getTelephone()
	{
		return $this->_telephone;
	}

	public function setTelephone($telephone)
	{
		$this->_telephone = $telephone;
	}

	public function getMotDePasse()
	{
		return $this->_motDePasse;
	}

	public function setMotDePasse($motDePasse)
	{
		$this->_motDePasse = $motDePasse;
	}
	public function getRole()
	{
		return $this->_role;
	}

	public function setRole($role)
	{
		$this->_role = $role;
	}

	public function getPseudo()
	{
		return $this->_pseudo;
	}

	public function setPseudo($pseudo)
	{
		$this->_pseudo = $pseudo;
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
		foreach ($data as $key => $value) {
			$methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
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
		return "IdUtilisateur : " . $this->getIdUtilisateur() . "Nom : " . $this->getNom() . "Prenom : " . $this->getPrenom() . "AdresseMail : " . $this->getAdresseMail() . "telephone : ". $this->getTelephone() . "MotDePasse : " . $this->getMotDePasse() . "Role : " . $this->getRole() . "Pseudo : " . $this->getPseudo() . "\n";
	}
}
