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
 $m = new Taches(["libelleTache"=>"test","dateEcheanceTache"=>2009-12-20,"idEtatAvancement"=>1,"idUtilisateur"=>1,"idPrioriteTache"=>1]);
var_dump($m);
$D = TachesManager::add($m);
var_dump($D);

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
