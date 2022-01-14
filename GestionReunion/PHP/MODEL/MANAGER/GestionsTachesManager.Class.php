<?php

class GestionsTachesManager 
{
	public static function add(GestionsTaches $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO GestionsTaches (idReunion,idTache)  VALUES (:idReunion,:idTache)");
        $q->bindValue(":idReunion", $obj->getIdReunion());
        $q->bindValue(":idTache", $obj->getIdTache());
        
        return $q->execute();
       

	}

	public static function update(GestionsTaches $obj)
	{
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE GestionsTaches SET idGestionTache=:idGestionTache,idReunion=:idReunion,idTache=:idTache WHERE idGestionTache=:idGestionTache");
        $q->bindValue(":idGestionTache", $obj->getIdGestionTache());
        $q->bindValue(":idReunion", $obj->getIdReunion());
        $q->bindValue(":idTache", $obj->getIdTache());
  
		return $q->execute();
	}
	public static function delete(GestionsTaches $obj)
	{
 		$db=DbConnect::getDb();
		$id = (int) $obj->getIdTache(); // permet de bloquer les injections SQL
		return $db->exec("DELETE FROM GestionsTaches WHERE idGestionTache=" .$id);
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM GestionsTaches WHERE idGestionTache =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new GestionsTaches($results);
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
		$q = $db->query("SELECT * FROM GestionsTaches");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new GestionsTaches($donnees);
			}
		}
		return $liste;
	}
}