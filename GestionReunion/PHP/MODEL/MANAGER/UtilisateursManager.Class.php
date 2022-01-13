<?php

class UtilisateursManager
{ /* fonction ajout */
    public static function add(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO utilisateurs (nomUtilisateur,prenomUtilisateur, emailUtilisateur, motDePasseUtilisateur,validationUtilisateur,idRole) VALUES (:nomUtilisateur,:prenomUtilisateur,:emailUtilisateur,:motDePasseUtilisateur,:validationUtilisateur,:idRole)");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":emailUtilisateur", $obj->getEmailUtilisateur());
        $q->bindValue(":motDePasseUtilisateur", $obj->getMotDePasseUtilisateur());
        $q->bindValue(":validationUtilisateur", $obj->getValidationUtilisateur());
        $q->bindValue(":idRole", $obj->getIdRole());
        return $q->execute();
    }

    /* fonction modification */
    public static function update(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE utilisateurs SET idUtilisateur=:idUtilisateur,nomUtilisateur=:nomUtilisateur,prenomUtilisateur=:prenomUtilisateur,emailUtilisateur=:emailUtilisateur,motDePasseUtilisateur=:motDePasseUtilisateur,validationUtilisateur=:validationUtilisateur,idRole=:idRole WHERE idUtilisateur=:idUtilisateur");
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":emailUtilisateur", $obj->getEmailUtilisateur());
        $q->bindValue(":motDePasseUtilisateur", $obj->getMotDePasseUtilisateur());
        $q->bindValue(":validationUtilisateur", $obj->getValidationUtilisateur());
        $q->bindValue(":idRole", $obj->getIdRole());
        return $q->execute();
    }
    public static function delete(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        return $db->exec("DELETE FROM utilisateurs WHERE idUtilisateur=" . $obj->getIdUtilisateur());
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM utilisateurs WHERE idUtilisateur =" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Utilisateurs($results);
        } else {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Utilisateurs");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Utilisateurs($donnees);
            }
        }
        return $liste;
    }
    // public static function findByPseudo($pseudo)
    // {
    // 	$db = DbConnect::getDb();
    //     if (!in_array(";",str_split( $pseudo))) // s'il n'y a pas de ; , je lance la requete
    //     {
    //         $q = $db->query("SELECT * FROM Utilisateurs WHERE pseudo ='" . $pseudo . "'");
    //         $results = $q->fetch(PDO::FETCH_ASSOC);
    //         if ($results != false)
    //         {
    //             return new Utilisateurs($results);
    //         }
    //         else
    //         {
    //             return false;
    //         }
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }
}
