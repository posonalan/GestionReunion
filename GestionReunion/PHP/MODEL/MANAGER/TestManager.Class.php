<?php
  
//*********************************UserManager**************************** *//

//ADD UserManager : ok
//  $m = new Utilisateurs(["nomUtilisateur"=>"test","prenomUtilisateur"=>"Alan","emailUtilisateur"=>"alan.poson@gmail.com","motDePasseUtilisateur"=>"test","validationUtilisateur"=>true,"idRole"=>1]);
// var_dump($m);
// $D = UtilisateursManager::add($m);
// var_dump($D);

// //Update UserManager : ok
// $m = UtilisateursManager::findById(18);
// var_dump($m);
// $m->setNomUtilisateur("pierrik");
// var_dump($m);
// UtilisateursManager::update($m);

// //Delete UserManager : ok
// $m = UtilisateursManager::findById(20);
// UtilisateursManager::delete($m);

// //Get Liste UserManager : ok
// $tableau = UtilisateursManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }


//*********************************UserManager**************************** *//

// ADD UserManager : ok
 $m = new Sujets(["libelleSujet"=>"test","tempsAlloue"=>'00:20:00',"idOrateur"=>2]);
var_dump($m);
$D = SujetsManager::add($m);
var_dump($D);

// //Update UserManager : ok
// $m = TachesManager::findById(1);
// var_dump($m);
// $m->setLibelleTache("pierrik");
// var_dump($m);
// TachesManager::update($m);

// //Delete UserManager : ok
// $m = TachesManager::findById(1);
// TachesManager::delete($m);

// //Get Liste UserManager : ok
// $tableau = TachesManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }
