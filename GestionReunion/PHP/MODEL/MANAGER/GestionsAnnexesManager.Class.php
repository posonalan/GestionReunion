<?php

class GestionsAnnexesManager
{
    public static function add(GestionsAnnexes $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO gestionsannexes (idReunion,idFichierAnnexe) VALUES (:idReunion,:idFichierAnnexe)");
        $q->bindValue(":idReunion", $obj->getIdReunion());
        $q->bindValue(":idFichierAnnexe",$obj->getIdFichierAnnexe());
        return $q->execute();
    }

    public static function update(GestionsAnnexes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE gestionsannexes SET idGestionAnnexe=:idGestionAnnexe,idReunion=:idReunion,idFichierAnnexe=:idFichierAnnexe WHERE idEtatAvancement=:idEtatAvancement");
        $q->bindValue(":idGestionAnnexe", $obj->getGestionAnnexe());
        $q->bindValue(":idEtatAvancement", $obj->getIdEtatAvancement());
		$q->bindValue(":libelleEtatAvancement", $obj->getLibelleEtatAvancement());
		$q->execute();
	}

    public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM gestionsannexes");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new GestionsAnnexes($donnees);
			}
		}
		return $liste;
	}

    public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM gestionsannexes WHERE idGestionAnnexe =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new GestionsAnnexes($results);
		}
		else
		{
			return false;
		}
	}

    public static function delete(GestionsAnnexes $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM gestionsannexes WHERE idGestionsAnnexes=" .$obj->getIdGestionAnnexe());
	}
}