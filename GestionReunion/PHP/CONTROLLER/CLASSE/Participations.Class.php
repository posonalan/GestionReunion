<?php
class Participations
{

    /*****************Attributs***************** */
    private $_idParticipation;
    private $_idUtilisateur;
    private $_idReunion;
    private $_idStatutPresence;
    private $_obligationPresence;

    /*****************Accesseurs***************** */

    public function getIdParticipation()
    {
        return $this->_idParticipation;
    }

    public function setIdParticipation($idParticipation)
    {
        $this->_idParticipation = $idParticipation;
    }

    public function getIdUtilisateur()
    {
        return $this->_idUtilisateur;
    }

    public function setIdUtilisateur($idUtilisateur)
    {
        $this->_idUtilisateur = $idUtilisateur;
    }

    public function getIdReunion()
    {
        return $this->_idReunion;
    }

    public function setIdReunion($idReunion)
    {
        $this->_idReunion = $idReunion;
    }

    public function getIdStatutPresence()
    {
        return $this->_idStatutPresence;
    }

    public function setIdStatutPresence($idStatutPresence)
    {
        $this->_idStatutPresence = $idStatutPresence;
    }

    public function getObligationPresence()
    {
        return $this->_obligationPresence;
    }

    public function setObligationPresence($obligationPresence)
    {
        $this->_obligationPresence = $obligationPresence;
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
        return "<br>IdParticipation : ".$this->getIdParticipation().
               "<br>IdUtilisateur : ".$this->getIdUtilisateur().
               "<br>IdReunion : ".$this->getIdStatutPresence().
               "<br>ObligationPrésence : ".$this->getObligationPresence();
    }
}