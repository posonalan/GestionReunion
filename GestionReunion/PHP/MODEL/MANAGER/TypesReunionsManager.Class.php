<?php

class TypesReunionsManager
{ /* fonction ajout */
    public static function add(TypesReunions $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO TypesReunions (libelleTypeReunion) VALUES (:libelleTypeReunion)");
        $q->bindValue(":libelleTypeReunion", $obj->getLibelleTypeReunion()); 
        return $q->execute();
    }

    /* fonction modification */
    public static function update(TypesReunions $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE typesreunions SET libelleTypeReunion=:libelleTypeReunion WHERE idTypeReunion=:idTypeReunion");
        $q->bindValue(":libelleTypeReunion", $obj->getLibelleTypeReunion());
        $q->bindValue(":idTypeReunion", $obj->getIdTypeReunion());
        return $q->execute();
    }
    public static function delete(TypesReunions $obj)
    {
        $db = DbConnect::getDb();
        return $db->exec("DELETE FROM TypesReunions WHERE idTypeReunion=" . $obj->getIdTypeReunion());
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM TypesReunions WHERE idTypeReunion =" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new TypesReunions($results);
        } else {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM TypesReunions");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new TypesReunions($donnees);
            }
        }
        return $liste;
    }
}