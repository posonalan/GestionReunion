<h1>Test</h1>
<?php


//Test ReunionsManager

// echo "recherche id = 1" . "<br>";
// $obj =GestionsAnnexesManager::findById(1);
// var_dump($obj);
// echo $obj->toString();

// echo "ajout de l'objet". "<br>";
// $newObj = new GestionsAnnexes(["idReunion"=>3,"idFichierAnnexe"=>2]);
// var_dump($newObj);
// GestionsAnnexesManager::add($newObj);

// echo "Liste des objets" . "<br>";
// $array = ParticipationsManager::getList();
// foreach ($array as $unObj)
// {
	// echo $unObj->toString() . "<br><br>";
// }

echo "on met à jour l'id 2" . "<br>";
$obj=GestionsAnnexesManager::findById(3);
$obj->setFichierAnnexe(1);
ParticipationsManager::update($obj);
echo "Liste des objets" . "<br>";
$array = ParticipationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

// echo "on supprime un objet". "<br>";
// $obj = ParticipationsManager::findById(2);
// var_dump($obj);
// ParticipationsManager::delete($obj);
// echo "Liste des objets" . "<br>";
// $array = ParticipationsManager::getList();
// foreach ($array as $unObj)
// {
	// echo $unObj->toString() . "<br><br>";
// }
// 
?>