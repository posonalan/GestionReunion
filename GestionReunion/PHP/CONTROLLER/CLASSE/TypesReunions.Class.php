<?php
class TypesReunions
{
    /*****************Attributs***************** */

    private $_idTypeReunion;
    private $_libelleTypeReunion;

    /*****************Accesseurs***************** */
    public function getIdTypeReunion()
    {
        return $this->_idTypeReunion;
    }

    public function setIdTypeReunion($idTypeReunion)
    {
        $this->_idTypeReunion = $idTypeReunion;
    }

    public function getLibelleTypeReunion()
    {
        return $this->_libelleTypeReunion;
    }

    public function setLibelleTypeReunion($libelleTypeReunion)
    {
        $this->_libelleTypeReunion = $libelleTypeReunion;
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
        return "<div style=color:pink style=background-color:white><br>*****<br>
        IdTypeReunion : ".$this->getIdTypeReunion().
		"<br> Libelle Type Reunion : ".$this->getLibelleTypeReunion().
		"<br> ***** <br></div>"; }  

  
}