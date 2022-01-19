<?php

class OrdresDuJourManager
{ /* fonction ajout */
    public static function add(OrdresDuJour $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO OrdreDuJour (idReunion, idSujet) VALUES (:idReunion, :idSujet)");
        $q->bindValue(":idReunion", $obj->getIdReunion());
          $q->bindValue(":idSujet", $obj->getIdSujet());
        return $q->execute();
    }

    /* fonction modification */
    public static function update(OrdresDuJour $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE OrdreDuJour SET idReunion=:idReunion, idSujet =:idSujet WHERE idOrdreDuJour=:idOrdreDuJour");
        $q->bindValue(":idReunion", $obj->getIdReunion());
        $q->bindValue(":idSujet", $obj->getIdSujet());
        $q->bindValue(":idOrdreDuJour", $obj->getIdOrdreDuJour());
        return $q->execute();
    }
    public static function delete(OrdresDuJour $obj)
    {
        $db = DbConnect::getDb();
        return $db->exec("DELETE FROM ordresdujour WHERE idOrdreDuJour=" . $obj->getIdOrdreDuJour());
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM ordredujour WHERE idOrdreDuJour =" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new OrdresDuJour($results);
        } else {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM salles");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new OrdresDuJour($donnees);
            }
        }
        return $liste;
    }
}