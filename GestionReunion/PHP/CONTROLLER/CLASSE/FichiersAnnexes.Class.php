<?php

class FichiersAnnexes
{

	/*****************Attributs***************** */

	private $_idFichierAnnexe;
	private $_titreFichierAnnexe;
    private $_lienFichierAnnexe;

	/***************** Accesseurs ***************** */

    public function getIdFichierAnnexe()
	{
		return $this->_idFichierAnnexe;
	}

	public function setIdFichierAnnexe($idFichierAnnexe)
	{
		$this->_idFichierAnnexe = $idFichierAnnexe;
	}

	public function getTitreFichierAnnexe()
	{
		return $this->_titreFichierAnnexe;
	}

	public function setTitreFichierAnnexe($titreFichierAnnexe)
	{
		$this->_titreFichierAnnexe = $titreFichierAnnexe;
	}

    public function getLienFichierAnnexe()
    {
        return $this->_lienFichierAnnexe;
    }

    public function setLienFichierAnnexe($lienFichierAnnexe)
    {
        $this->_lienFichierAnnexe = $lienFichierAnnexe;
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
        IdFichierAnnexe : ".$this->getIdFichierAnnexe().
		"<br> Titre fichier annexe  : ".$this->getTitreFichierAnnexe().
		"<br> lien fichier annexe : ".$this->getLienFichierAnnexe().
        "<br> ***** <br></div>";
	}



	
}