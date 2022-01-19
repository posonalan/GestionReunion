<?php

class StatutsPresences
{

	/*****************Attributs***************** */

	private $_idStatutPresence;
	private $_libelleStatutPresence;
    

	/***************** Accesseurs ***************** */


    public function getIdStatutPresence()
	{
		return $this->_idStatutPresence;
	}

	public function setIdStatutPresence($idStatutPresence)
	{
		$this->_idStatutPresence = $idStatutPresence;
	}

	public function getLibelleStatutPresence()
	{
		return $this->_libelleStatutPresence;
	}

	public function setLibelleStatutPresence($libelleStatutPresence)
	{
		$this->_libelleStatutPresence = $libelleStatutPresence;
        
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
		IdStatutPresence : ".$this->getIdStatutPresence().
		"<br> LibelleStatutPresence : ".$this->getLibelleStatutPresence().
        "<br> ***** <br></div>";
	}
}

