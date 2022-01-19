<?php
class GestionsAnnexes
{

    /*****************Attributs***************** */
    private $_idGestionAnnexe;
    private $_idReunion;
    private $_idFichierAnnexe;

    /*****************Accesseurs***************** */

    public function getIdGestionAnnexe()
    {
        return $this->_idGestionAnnexe;
    }

    public function setIdGestionAnnexe($idGestionAnnexe)
    {
        $this->_idGestionAnnexe = $idGestionAnnexe;
    }

    public function getIdReunion()
    {
        return $this->_idReunion;
    }

    public function setIdReunion($idReunion)
    {
        $this->_idReunion = $idReunion;
    }

    public function getIdFichierAnnexe()
    {
        return $this->_idFichierAnnexe;
    }

    public function setIdFichierAnnexe($idFichierAnnexe)
    {
        $this->_idFichierAnnexe = $idFichierAnnexe;
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
        return "<br>IdGestionAnnexe : ".$this->getIdGestionAnnexe().
               "<br>IdReunion : ".$this->getIdReunion().
               "<br>IdFichierAnnexe : ".$this->getIdFichierAnnexe();
    }
}