<?php
class ParticipationsManager
{
    public static function add(Participations $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO participations (idUtilisateur,idReunion,idStatutPresence,obligationPresence) VALUES (:idUtilisateur,:idReunion,:idStatutPresence,:obligationPresence)");
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":idReunion", $obj->getIdReunion());
        $q->bindValue(":idStatutPresence",$obj->getIdStatutPresence());
        $q->bindValue(":obligationPresence",$obj->getObligationPresence());
        return $q->execute();
    }

    public static function update(Participations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE participations SET idParticipation=:idParticipation,idUtilisateur=:idUtilisateur,idReunion=:idReunion,obligationPresence=:obligationPresence WHERE idParticipation=:idParticipation");
		$q->bindValue(":idParticipation", $obj->getIdParticipation());
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":idReunion", $obj->getIdReunion());
        $q->bindValue(":idStatutPresence",$obj->getIdStatutPresence());
        $q->bindValue(":obligationPresence",$obj->getObligationPresence());
		$q->execute();
	}

    public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM participations");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new participations($donnees);
			}
		}
		return $liste;
	}

    public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM participations WHERE idParticipation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Participations($results);
		}
		else
		{
			return false;
		}
	}

    public static function delete(Participations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM participations WHERE idParticipation=" .$obj->getIdParticipation());
	}
}