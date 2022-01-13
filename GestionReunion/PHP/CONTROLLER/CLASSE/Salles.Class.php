<?php

class Salles
{

	/*****************Attributs***************** */

	private $_idSalle;
	private $_libelleSalle;
    private $_tailleMaxSalle;

	/***************** Accesseurs ***************** */

    public function getIdSalle()
	{
		return $this->_idSalle;
	}

	public function setIdSalle($idSalle)
	{
		$this->_idSalle = $idSalle;
	}

	public function getLibelleSalle()
	{
		return $this->_libelleSalle;
	}

	public function setLibelleSalle($libelleSalle)
	{
		$this->_libelleSalle = $libelleSalle;
	}

    public function getTailleMaxSalle()
    {
        return $this->_tailleMaxSalle;
    }

    public function setTailleMaxSalle($tailleMaxSalle)
    {
        $this->_tailleMaxSalle = $tailleMaxSalle;
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
        IdSalle : ".$this->getIdSalle().
		"<br> libelle Salle : ".$this->getLibelleSalle().
		"<br> Taille Maximal de la salle : ".$this->getTailleMaxSalle().
        "<br> ***** <br></div>";
	}


}