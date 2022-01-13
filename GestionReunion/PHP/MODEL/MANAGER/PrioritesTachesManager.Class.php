<?php

class PrioritesTachesManager
{
    public static function add(PrioritesTaches $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO prioritestaches (libellePrioriteTache) VALUES (:libellePrioriteTache)");
        $q->bindValue(":libellePrioriteTache", $obj->getLibellePrioriteTache());
        return $q->execute();
    }

    public static function update(PrioritesTaches $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE prioritestaches SET idPrioriteTache=:idPrioriteTache,libellePrioriteTache=:libellePrioriteTache WHERE idPrioriteTache=:idPrioriteTache");
		$q->bindValue(":idPrioriteTache", $obj->getIdPrioriteTache());
		$q->bindValue(":libellePrioriteTache", $obj->getLibellePrioriteTache());
		$q->execute();
	}

    public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM prioritestaches");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new PrioritesTaches($donnees);
			}
		}
		return $liste;
	}

    public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM prioritestaches WHERE idPrioriteTache =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new PrioritesTaches($results);
		}
		else
		{
			return false;
		}
	}

    public static function delete(PrioritesTaches $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM prioritestaches WHERE idPrioriteTache=" .$obj->getIdPrioriteTache());
	}
}
