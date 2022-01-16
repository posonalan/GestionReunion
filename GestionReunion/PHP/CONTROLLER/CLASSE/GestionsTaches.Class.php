<?php

class GestionsTaches 
{

	/*****************Attributs***************** */

	private $_idGestionTache;
	private $_idReunion;
    private $_idTache;
    
			
	/***************** Accesseurs ***************** */

    

	public function getIdGestionTache()
	{
		return $this->_idGestionTache;
	}

	public function setIdGestionTache($idGestionTache)
	{
		$this->_idGestionTache = $idGestionTache;
	}

	public function getIdReunion()
	{
		return $this->_idReunion;
	}

	public function setIdReunion($idReunion)
	{
		$this->_idReunion = $idReunion;
	}

    public function getIdTache()
    {
        return $this->_idTache;
    }

    public function setIdTache($idTache)
    {
        $this->_idTache = $idTache;
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
        return "<br>IdGestionTache : ".$this->getIdGestionTache().
               "<br>IdReunion : ".$this->getIdReunion().
               "<br>IdTache : ".$this->getIdTache().
               "<br> ***** <br></div>";

}
}