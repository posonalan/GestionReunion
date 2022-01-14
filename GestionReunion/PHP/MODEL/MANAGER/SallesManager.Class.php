<?php

class SallesManager
{ /* fonction ajout */
    public static function add(Salles $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO salles (libelleSalle, tailleMaxSalle) VALUES (:libelleSalle, :tailleMaxSalle)");
        $q->bindValue(":libelleSalle", $obj->getLibelleSalle());
          $q->bindValue(":tailleMaxSalle", $obj->getTailleMaxSalle());
        return $q->execute();
    }

    /* fonction modification */
    public static function update(salles $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE salles SET libelleSalle=:libelleSalle, tailleMaxSalle =:tailleMaxSalle WHERE idSalle=:idSalle");
        $q->bindValue(":libelleSalle", $obj->getLibelleSalle());
        $q->bindValue(":tailleMaxSalle", $obj->getTailleMaxSalle());
        $q->bindValue(":idSalle", $obj->getIdSalle());
        return $q->execute();
    }
    public static function delete(salles $obj)
    {
        $db = DbConnect::getDb();
        return $db->exec("DELETE FROM salles WHERE idSalle=" . $obj->getIdSalle());
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM salles WHERE idSalle =" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new salles($results);
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
                $liste[] = new salles($donnees);
            }
        }
        return $liste;
    }
}