<?php

class OrdresDuJour
{
	public static function add(OrdresDuJour $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO OrdresDuJour (idReunion,idSujet)  VALUES (:idReunion,:idSujet)");
        $q->bindValue(":idReunion", $obj->getIdReunion());
        $q->bindValue(":idSujet", $obj->getIdSujet());
        
        return $q->execute();
	}

	public static function update(OrdresDuJour $obj)
	{
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE OrdresDuJour SET idOrdreDuJour=:idOrdreDuJour,idReunion=:idReunion,idSujet=:idSujet WHERE idOrdreDuJour=:idOrdreDuJour");
        $q->bindValue(":idOrdreDuJour", $obj->getIdOrdreDuJour());
        $q->bindValue(":idReunion", $obj->getIdReunion());
        $q->bindValue(":idSujet", $obj->getIdSujet());
      
		return $q->execute();
	}
	public static function delete(OrdresDuJour $obj)
	{
 		$db=DbConnect::getDb();
		$id = (int) $obj->getIdOrdreDuJour(); // permet de bloquer les injections SQL
		return $db->exec("DELETE FROM OrdresDuJour WHERE idOrdreDuJour=" .$id);
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM OrdresDuJour WHERE idOrdreDuJour =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new OrdresDuJour($results);
		}
		else
		{
			return false;
		}
	}
    
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM OrdresDuJour");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new OrdresDuJour($donnees);
			}
		}
		return $liste;
	}
}