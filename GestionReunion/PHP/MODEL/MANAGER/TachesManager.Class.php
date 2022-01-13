<?php

class TachesManager 
{
	public static function add(Taches $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Taches (libelleTache,dateEcheanceTache,idEtatAvancement,idUtilisateur,idPrioriteTache)  VALUES (:libelleTache,:dateEcheanceTache,:idEtatAvancement,:idUtilisateur,:idPrioriteTache)");
        $q->bindValue(":libelleTache", $obj->getlibelleTache());
        $q->bindValue(":dateEcheanceTache", $obj->getdateEcheanceTache());
        $q->bindValue(":idEtatAvancement", $obj->getidEtatAvancement());
        $q->bindValue(":idUtilisateur", $obj->getidUtilisateur());
        $q->bindValue(":idPrioriteTache", $obj->getidPrioriteTache());
        return $q->execute();
	}

	public static function update(Taches $obj)
	{
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Taches SET idTache=:idTache,libelleTache=:libelleTache,dateEcheanceTache=:dateEcheanceTache,idEtatAvancement=:idEtatAvancement,idUtilisateur=:idUtilisateur,idPrioriteTache=:idPrioriteTache WHERE idTache=:idTache");
        $q->bindValue(":idTache", $obj->getIdTache());
        $q->bindValue(":libelleTache", $obj->getlibelleTache());
        $q->bindValue(":dateEcheanceTache", $obj->getdateEcheanceTache());
        $q->bindValue(":idEtatAvancement", $obj->getidEtatAvancement());
        $q->bindValue(":idUtilisateur", $obj->getidUtilisateur());
        $q->bindValue(":idPrioriteTache", $obj->getidPrioriteTache());
		return $q->execute();
	}
	public static function delete(Taches $obj)
	{
 		$db=DbConnect::getDb();
		$id = (int) $obj->getIdTache(); // permet de bloquer les injections SQL
		return $db->exec("DELETE FROM Taches WHERE idTache=" .$id);
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Taches WHERE idTache =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Taches($results);
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
		$q = $db->query("SELECT * FROM Taches");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Taches($donnees);
			}
		}
		return $liste;
	}
}