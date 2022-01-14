<?php

class Sujets 
{

	/*****************Attributs***************** */

	private $_idSujet;
	private $_libelleSujet;
	private $_tempsAlloue;
	private $_IdOrateur;
	

	/***************** Accesseurs ***************** */


	public function getIdSujet()
	{
		return $this->_idSujet;
	}

	public function setIdSujet($idSujet)
	{
		$this->_idSujet = $idSujet;
	}

	public function getLibelleSujet()
	{
		return $this->_libelleSujet;
	}

	public function setLibelleSujet($libelleSujet)
	{
		$this->_libelleSujet = $libelleSujet;
	}

	public function getTempsAlloue()
	{
		return $this->_tempsAlloue;
	}

	public function setTempsAlloue($tempsAlloue)
	{
		$this->_tempsAlloue = $tempsAlloue;
	}

	public function getIdOrateur()
	{
		return $this->_IdOrateur;
	}

	public function setIdOrateur($IdOrateur)
	{
		$this->_IdOrateur = $IdOrateur;
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
		IdSujet : ".$this->getIdSujet().
		"<br> LibelleSujet : ".$this->getLibelleSujet().
		"<br> TempsAlloue: ".$this->getTempsAlloue().
	    "<br> IdOrateur : ".$this->getIdOrateur().
	    "<br> ***** <br></div>";
	}
}