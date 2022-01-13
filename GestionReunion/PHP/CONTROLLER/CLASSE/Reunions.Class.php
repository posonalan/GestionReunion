<?php
class Reunions
{

    /*****************Attributs***************** */

    private $_idReunion;
    private $_titreReunion;
    private $_dateReunion;
    private $_lieuReunion;
    private $_horaireDebut;
    private $_horaireFin;
    private $_nbMaxParticipants;
    private $_contenuCompteRendu;
    private $_idCreateur;
    private $_idAnimateur;
    private $_idSecretaire;
    private $_idTypeReunion;
    private $_idEtatAvancement;
    private $_idSalle;

    /*****************Accesseurs***************** */

    public function getIdReunion()
    {
        return $this->_idReunion;
    }

    public function setIdReunion($idReunion)
    {
        $this->_idReunion = $idReunion;
    }

    public function getTitreReunion()
    {
        return $this->_titreReunion;
    }

    public function setTitreReunion($titreReunion)
    {
        $this->_titreReunion = $titreReunion;
    }

    public function getDateReunion()
    {
        return $this->_dateReunion;
    }

    public function setDateReunion($dateReunion)
    {
        $this->_dateReunion = $dateReunion;
    }

    public function getLieuReunion()
    {
        return $this->_lieuReunion;
    }

    public function setLieuReunion($lieuReunion)
    {
        $this->_lieuReunion = $lieuReunion;
    }

    public function getHoraireDebut()
    {
        return $this->_horaireDebut;
    }

    public function setHoraireDebut($horaireDebut)
    {
        $this->_horaireDebut = $horaireDebut;
    }

    public function getHoraireFin()
    {
        return $this->_horaireFin;
    }

    public function setHoraireFin($horaireFin)
    {
        $this->_horaireFin = $horaireFin;
    }

    public function getNbMaxParticipants()
    {
        return $this->_nbMaxParticipants;
    }

    public function setNbMaxParticipants($nbMaxParticipants)
    {
        $this->_nbMaxParticipants = $nbMaxParticipants;
    }

    public function getContenuCompteRendu()
    {
        return $this->_contenuCompteRendu;
    }

    public function setContenuCompteRendu($contenuCompteRendu)
    {
        $this->_contenuCompteRendu = $contenuCompteRendu;
    }

    public function getIdCreateur()
    {
        return $this->_idCreateur;
    }

    public function setIdCreateur($idCreateur)
    {
        $this->_idCreateur = $idCreateur;
    }

    public function getIdAnimateur()
    {
        return $this->_idAnimateur;
    }

    public function setIdAnimateur($idAnimateur)
    {
        $this->_idAnimateur = $idAnimateur;
    }

    public function getIdSecretaire()
    {
        return $this->_idSecretaire;
    }

    public function setIdSecretaire($idSecretaire)
    {
        $this->_idSecretaire = $idSecretaire;
    }

    public function getIdTypeReunion()
    {
        return $this->_idTypeReunion;
    }

    public function setIdTypeReunion($idTypeReunion)
    {
        $this->_idTypeReunion = $idTypeReunion;
    }

    public function getIdEtatAvancement()
    {
        return $this->_idEtatAvancement;
    }

    public function setIdEtatAvancement($idEtatAvancement)
    {
        $this->_idEtatAvancement = $idEtatAvancement;
    }

    public function getIdSalle()
    {
        return $this->_idSalle;
    }

    public function setIdSalle($idSalle)
    {
        $this->_idSalle = $idSalle;
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
    
    public function toString()
    {
        return "IdReunion : ".$this->getIdReunion().
               "<br>TitreReunion : ".$this->getTitreReunion().
               "<br>DateReunion : ".$this->getDateReunion().
               "<br>LieuReunion : ".$this->getLieuReunion().
               "<br>HoraireDebut : ".$this->getHoraireDebut().
               "<br>HoraireFin : ".$this->getHoraireFin().
               "<br>NbMaxParticipants : ".$this->getNbMaxParticipants().
               "<br>ContenuCompteRendu : ".$this->getContenuCompteRendu().
               "<br>IdCreateur : ".$this->getIdCreateur().
               "<br>IdAnimateur : ".$this->getIdAnimateur().
               "<br>IdSecretaire : ".$this->getIdSecretaire().
               "<br>IdTypeReunion : ".$this->getIdTypeReunion().
               "<br>IdEtatAvancement : ".$this->getIdEtatAvancement().
               "<br>IdSalle : ".$this->getIdSalle()."\n";
    }    
}