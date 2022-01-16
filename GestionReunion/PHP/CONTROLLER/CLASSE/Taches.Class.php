<?php

class Taches 
{

	/*****************Attributs***************** */

	private $_idTache;
	private $_libelleTache;
    private $_dateEcheanceTache;
    private $_idEtatAvancement;
    private $_idUtilisateur;
    private $_idPrioriteTache;

	/***************** Accesseurs ***************** */



	public function getIdTache()
	{
		return $this->_idTache;
	}

	public function setIdTache($idTache)
	{
		$this->_idTache = $idTache;
	}

	public function getLibelleTache()
	{
		return $this->_libelleTache;
	}

	public function setLibelleTache($libelleTache)
	{
		$this->_libelleTache = $libelleTache;
	}

    public function getDateEcheanceTache()
    {
        return $this->_dateEcheanceTache;
    }

    public function setDateEcheanceTache($dateEcheanceTache)
    {
        $this->_dateEcheanceTache = $dateEcheanceTache;
    }

    public function getIdEtatAvancement()
    {
        return $this->_idEtatAvancement;
    }

    public function setIdEtatAvancement($idEtatAvancement)
    {
        $this->_idEtatAvancement = $idEtatAvancement;
    }

    public function getIdUtilisateur()
    {
        return $this->_idUtilisateur;
    }

    public function setIdUtilisateur($idUtilisateur)
    {
        $this->_idUtilisateur = $idUtilisateur;
    }

    public function getIdPrioriteTache()
    {
        return $this->_idPrioriteTache;
    }

    public function setIdPrioriteTache($idPrioriteTache)
    {
        $this->_idPrioriteTache = $idPrioriteTache;
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
		IdTache : ".$this->getIdTache().
		"<br> LibelleTache : ".$this->getLibelleTache().
		"<br> dateEcheanceTache: ".$this->getDateEcheanceTache().
		"<br> idEtatAvancement : ".$this->getIdEtatAvancement().
		"<br> idUtilisateur : ".$this->getIdUtilisateur().
		"<br> idPrioriteTache : ".$this->getIdPrioriteTache().
		
		"<br> ***** <br></div>";
	}
}