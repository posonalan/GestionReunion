<?php

class FichiersAnnexesManager
{ /* fonction ajout */
    public static function add(FichiersAnnexes $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO fichiersannexes (titreFichierAnnexe, lienFichierAnnexe) VALUES (:titreFichierAnnexe, :lienFichierAnnexe)");
        $q->bindValue(":titreFichierAnnexe", $obj->getTitreFichierAnnexe());
          $q->bindValue(":lienFichierAnnexe", $obj->getLienFichierAnnexe());
        return $q->execute();
    }

    /* fonction modification */
    public static function update(FichiersAnnexes $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE fichiersannexes SET titreFichierAnnexe=:titreFichierAnnexe, lienFichierAnnexe =:lienFichierAnnexe WHERE idFichierAnnexe=:idFichierAnnexe");
        $q->bindValue(":idFichierAnnexe", $obj->getIdFichierAnnexe());
        $q->bindValue(":titreFichierAnnexe", $obj->getTitreFichierAnnexe());
        $q->bindValue(":lienFichierAnnexe", $obj->getLienFichierAnnexe());
        return $q->execute();
    }
    public static function delete(FichiersAnnexes $obj)
    {
        $db = DbConnect::getDb();
        return $db->exec("DELETE FROM fichiersannexes WHERE idFichierAnnexe=" . $obj->getIdFichierAnnexe());
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM fichiersannexes WHERE idFichierAnnexe =" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new FichiersAnnexes($results);
        } else {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM fichiersannexes");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new FichiersAnnexes($donnees);
            }
        }
        return $liste;
    }
}