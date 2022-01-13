<?php
class EtatsAvancements
{

    /*****************Attributs***************** */
    private $_idEtatAvancement;
    private $libelleEtatAvancement;

    /*****************Accesseurs***************** */

    public function getIdEtatAvancement()
    {
        return $this->_idEtatAvancement;
    }

    public function setIdEtatAvancement($idEtatAvancement)
    {
        $this->_idEtatAvancement = $idEtatAvancement;
    }

    public function getLibelleEtatAvancement()
    {
        return $this->libelleEtatAvancement;
    }

    public function setLibelleEtatAvancement($libelleEtatAvancement)
    {
        $this->libelleEtatAvancement = $libelleEtatAvancement;
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
        return "<br>IdEtatAvancement : ".$this->getIdEtatAvancement().
               "<br>Libelle EtatAvancement : ".$this->getLibelleEtatAvancement();
    }

   

   
}