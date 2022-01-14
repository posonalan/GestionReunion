<?php
class PrioritesTaches
{
    /*****************Attributs***************** */

    private $_idPrioriteTache;
    private $_libellePrioriteTache;

    /*****************Accesseurs***************** */

    public function getIdPrioriteTache()
    {
        return $this->_idPrioriteTache;
    }

    public function setIdPrioriteTache($idPrioriteTache)
    {
        $this->_idPrioriteTache = $idPrioriteTache;
    }

    public function getLibellePrioriteTache()
    {
        return $this->_libellePrioriteTache;
    }

    public function setLibellePrioriteTache($libellePrioriteTache)
    {
        $this->_libellePrioriteTache = $libellePrioriteTache;
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
        return "<br>IdPrioriteTache : ".$this->getIdPrioriteTache().
               "<br>LibellePrioriteTache : ".$this->getLibellePrioriteTache() ;
    }  
}