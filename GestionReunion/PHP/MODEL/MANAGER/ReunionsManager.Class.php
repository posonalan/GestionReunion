<?php
class ReunionsManager
{
    public static function add(Reunions $obj)
    {
        $db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Reunions (titreReunion,dateReunion,lieuReunion,horaireDebut,horaireFin,nbMaxParticipants,contenuCompteRendu,idCreateur,idAnimateur,idSecretaire,idTypeReunion,idEtatAvancement,idSalle) VALUES (:titreReunion,:dateReunion,:lieuReunion,:horaireDebut,:horaireFin,:nbMaxParticipants,:contenuCompteRendu,:idCreateur,:idAnimateur,:idSecretaire,:idTypeReunion,:idEtatAvancement,:idSalle)");
		$q->bindValue(":titreReunion", $obj->getTitreReunion());
		$q->bindValue(":dateReunion", $obj->getDateReunion());
		$q->bindValue(":lieuReunion", $obj->getLieuReunion());
		$q->bindValue(":horaireDebut", $obj->getHoraireDebut());
		$q->bindValue(":horaireFin", $obj->getHoraireFin());
		$q->bindValue(":nbMaxParticipants", $obj->getNbMaxParticipants());
		$q->bindValue(":contenuCompteRendu", $obj->getContenuCompteRendu());
		$q->bindValue(":idCreateur", $obj->getIdCreateur());
		$q->bindValue(":idAnimateur", $obj->getIdAnimateur());
		$q->bindValue(":idSecretaire", $obj->getIdSecretaire());
		$q->bindValue(":idTypeReunion", $obj->getIdTypeReunion());
		$q->bindValue(":idEtatAvancement", $obj->getIdEtatAvancement());
		$q->bindValue(":idSalle", $obj->getIdSalle());
		$q->execute();
    }

    public static function update(Reunions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Reunions SET idReunion=:idReunion,titreReunion=:titreReunion,dateReunion=:dateReunion,lieuReunion=:lieuReunion,horaireDebut=:horaireDebut,horaireFin=:horaireFin,nbMaxParticipants=:nbMaxParticipants,contenuCompteRendu=:contenuCompteRendu,idCreateur=:idCreateur,idAnimateur=:idAnimateur,idSecretaire=:idSecretaire,idTypeReunion=:idTypeReunion,idEtatAvancement=:idEtatAvancement,idSalle=:idSalle WHERE idReunion=:idReunion");
		$q->bindValue(":idReunion", $obj->getIdReunion());
		$q->bindValue(":titreReunion", $obj->getTitreReunion());
		$q->bindValue(":dateReunion", $obj->getDateReunion());
		$q->bindValue(":lieuReunion", $obj->getLieuReunion());
		$q->bindValue(":horaireDebut", $obj->getHoraireDebut());
		$q->bindValue(":horaireFin", $obj->getHoraireFin());
		$q->bindValue(":nbMaxParticipants", $obj->getNbMaxParticipants());
		$q->bindValue(":contenuCompteRendu", $obj->getContenuCompteRendu());
		$q->bindValue(":idCreateur", $obj->getIdCreateur());
		$q->bindValue(":idAnimateur", $obj->getIdAnimateur());
		$q->bindValue(":idSecretaire", $obj->getIdSecretaire());
		$q->bindValue(":idTypeReunion", $obj->getIdTypeReunion());
		$q->bindValue(":idEtatAvancement", $obj->getIdEtatAvancement());
		$q->bindValue(":idSalle", $obj->getIdSalle());
		$q->execute();
	}

    public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Reunions");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Reunions($donnees);
			}
		}
		return $liste;
	}

    public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Reunions WHERE idReunion =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Reunions($results);
		}
		else
		{
			return false;
		}
	}

    public static function delete(Reunions $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Reunions WHERE idReunion=" .$obj->getIdReunion());
	}
}