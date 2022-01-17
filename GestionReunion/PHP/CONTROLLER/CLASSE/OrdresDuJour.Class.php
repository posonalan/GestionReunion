<?php

class OrdresDuJour 
{

	/*****************Attributs***************** */

	private $_idOrdreDuJour;
	private $_idReunion;
    private $_idSujet;
 
	/***************** Accesseurs ***************** */



	public function getIdOrdreDuJour()
	{
		return $this->_idOrdreDuJour;
	}

	public function setIdOrdreDuJour($idOrdreDuJour)
	{
		$this->_idOrdreDuJour = $idOrdreDuJour;
	}

	public function getIdReunion()
	{
		return $this->_idReunion;
	}

	public function setIdReunion($idReunion)
	{
		$this->_idReunion = $idReunion;
	}

    public function getIdSujet()
    {
        return $this->_idSujet;
    }

    public function setIdSujet($idSujet)
    {
        $this->_idSujet = $idSujet;
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
		IdTache : ".$this->getIdOrdreDuJour().
		"<br> LibelleTache : ".$this->getIdReunion().
		"<br> dateEcheanceTache: ".$this->getIdSujet().
		"<br> ***** <br></div>";
	}























	
    
}