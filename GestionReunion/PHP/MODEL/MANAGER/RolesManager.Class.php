<?php

class RolesManager
{ /* fonction ajout */
    public static function add(Roles $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO roles (libelleRole) VALUES (:libelleRole)");
        $q->bindValue(":libelleRole", $obj->getLibelleRole());
        return $q->execute();
    }

    /* fonction modification */
    public static function update(Roles $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE roles SET libelleRole=:libelleRole WHERE idRole=:idRole");
        $q->bindValue(":idRole", $obj->getIdRole());
        $q->bindValue(":libelleRole", $obj->getLibelleRole());
        return $q->execute();
    }
    public static function delete(Roles $obj)
    {
        $db = DbConnect::getDb();
        return $db->exec("DELETE FROM roles WHERE idRole=" . $obj->getIdRole());
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM roles WHERE idRole =" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Roles($results);
        } else {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM roles");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Roles($donnees);
            }
        }
        return $liste;
    }
}