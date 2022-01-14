<?php

class SujetsManager 
{
	public static function add(Sujets $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Taches (libelleSujet,tempsAlloue,idOrateur)  VALUES (:libelleSujet,:tempsAlloue,:idOrateur)");
        $q->bindValue(":libelleSujet", $obj->getLibelleSujet());
        $q->bindValue(":tempsAlloue", $obj->getTempsAlloue());
        $q->bindValue(":idOrateur", $obj->getIdOrateur());
        return $q->execute();
	}

	public static function update(Sujets $obj)
	{
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Taches SET idSujet=:idSujet,tempsAlloue=:tempsAlloue,idOrateur=:idOrateur WHERE idSujet=:idSujet");
        $q->bindValue(":idSujet", $obj->getIdSujet());
        $q->bindValue(":libelleSujet", $obj->getLibelleSujet());
        $q->bindValue(":tempsAlloue", $obj->getTempsAlloue());
        $q->bindValue(":idOrateur", $obj->getIdOrateur());
		return $q->execute();
	}
	public static function delete(Sujets $obj)
	{
 		$db=DbConnect::getDb();
		$id = (int) $obj->getIdSujet(); // permet de bloquer les injections SQL
		return $db->exec("DELETE FROM Sujets WHERE idSujet=" .$id);
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Sujets WHERE idSujet =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Sujets($results);
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
		$q = $db->query("SELECT * FROM Sujets");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Sujets($donnees);
			}
		}
		return $liste;
	}
}