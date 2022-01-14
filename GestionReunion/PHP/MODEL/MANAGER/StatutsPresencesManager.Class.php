<?php

class StatutsPresencesManager 
{
	public static function add(StatutsPresences $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO StatutsPresences (libelleStatutPresence)  VALUES (:libelleStatutPresence)");
        $q->bindValue(":libelleStatutPresence", $obj->getLibelleStatutPresence());
   
        return $q->execute();
	}	

	public static function update(StatutsPresences $obj)
	{
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE StatutsPresences SET id=:idStatutPresence,libelleStatutPresence=:libelleStatutPresence WHERE idStatutPresence=:idStatutPresence");
        $q->bindValue(":idStatutPresence", $obj->getIdStatutPresence());
        $q->bindValue(":libelleStatutPresence", $obj->getLibelleStatutPresence());
        
		return $q->execute();
	}
	public static function delete(StatutsPresences $obj)
	{
 		$db=DbConnect::getDb();
		$id = (int) $obj->getIdStatutPresence(); // permet de bloquer les injections SQL
		return $db->exec("DELETE FROM StatutsPresences WHERE idStatutPresence=" .$id);
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM StatutsPresences WHERE idStatutPresence =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new StatutsPresences($results);
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
		$q = $db->query("SELECT * FROM StatutsPresences");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new StatutsPresences($donnees);
			}
		}
		return $liste;
	}
}