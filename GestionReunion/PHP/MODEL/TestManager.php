<?php


//Test ReunionsManager

// echo "recherche id = 1" . "<br>";
// $obj =PrioritesTaches::findById(1);
// var_dump($obj);
// echo $obj->toString();

// echo "ajout de l'objet". "<br>";
// $newObj = new PrioritesTaches(["libellePrioriteTache" => "Maximale"]);
// var_dump($newObj);
// PrioritesTachesManager::add($newObj);

echo "Liste des objets" . "<br>";
$array = PrioritesTachesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}
// 
// echo "on met à jour l'id 2" . "<br>";
// $obj=PrioritesTachesManager::findById(3);
// $obj->setLibellePrioriteTache("Elevée");
// PrioritesTachesManager::update($obj);
// echo "Liste des objets" . "<br>";
// $array = PrioritesTachesManager::getList();
// foreach ($array as $unObj)
// {
	// echo $unObj->toString() . "<br><br>";
// }

echo "on supprime un objet". "<br>";
$obj = PrioritesTachesManager::findById(4);
PrioritesTachesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = PrioritesTachesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>