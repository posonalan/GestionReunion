<?php

class EtatsAvancementsManager
{
    public static function add(EtatsAvancements $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO etatsavancements (libelleEtatAvancement) VALUES (:libelleEtatAvancement)");
        $q->bindValue(":libelleEtatAvancement", $obj->getLibelleEtatAvancement());
        return $q->execute();
    }

    public static function update(EtatsAvancements $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE etatsavancements SET idEtatAvancement=:idEtatAvancement,libelleEtatAvancement=:libelleEtatAvancement WHERE idEtatAvancement=:idEtatAvancement");
		$q->bindValue(":idEtatAvancement", $obj->getIdEtatAvancement());
		$q->bindValue(":libelleEtatAvancement", $obj->getLibelleEtatAvancement());
		$q->execute();
	}

    public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM etatsavancements");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new EtatsAvancements($donnees);
			}
		}
		return $liste;
	}

    public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM etatsavancements WHERE idEtatAvancement =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new EtatsAvancements($results);
		}
		else
		{
			return false;
		}
	}

    public static function delete(EtatsAvancements $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM etatsavancements WHERE idEtatAvancement=" .$obj->getIdEtatAvancement());
	}
}
