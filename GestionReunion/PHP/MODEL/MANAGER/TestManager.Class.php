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

//*********************************RolesManager**************************** *//

//ADD RolesManager : ok
// $m = new Roles(["libelleRole"=>"Test"]);
// var_dump($m);
// $D = RolesManager::add($m);
// var_dump($D);


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
// //Update RolesManager : ok
// $m = RolesManager::findById(1);
// var_dump($m);
// $m->setLibelleRole("Utilisateur");
// var_dump($m);
// RolesManager::update($m);

// //Delete RolesManager : ok
// $m = RolesManager::findById(7);
// RolesManager::delete($m);

// //Get Liste RolesManager : ok
// $tableau = RolesManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************FichiersAnnexesManager**************************** *//

//ADD FichiersAnnexesManager : ok
// $m = new FichiersAnnexes(["titreFichierAnnexe"=>"Test","lienFichierAnnexe"=>"unLien"]);
// var_dump($m);
// $D = FichiersAnnexesManager::add($m);
// var_dump($D);

// //Update FichiersAnnexesManager : ok
// $m = FichiersAnnexesManager::findById(1);
// var_dump($m);
// $m->setTitreFichierAnnexe("Utilisateur");
// var_dump($m);
// FichiersAnnexesManager::update($m);

// //Delete FichiersAnnexesManager : ok
// $m = FichiersAnnexesManager::findById(3);
// FichiersAnnexesManager::delete($m);

// //Get Liste FichiersAnnexesManager : ok
// $tableau = FichiersAnnexesManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************SallesManager**************************** *//

//ADD SallesManager : ok
// $m = new Salles(["libelleSalle"=>"bleu","tailleMaxSalle"=>15]);
// var_dump($m);
// $D = SallesManager::add($m);
// var_dump($D);

// //Update SallesManager : ok
// $m = SallesManager::findById(1);
// var_dump($m);
// $m->setLibelleSalle("Cuisine");
// var_dump($m);
// SallesManager::update($m);

// //Delete SallesManager : ok
// $m = SallesManager::findById(2);
// SallesManager::delete($m);

// //Get Liste SallesManager : ok
// $tableau = SallesManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }

//*********************************TypesRunionsManager**************************** *//


//ADD TypesReunionsManager : ok
// $m = new TypesReunions(["libelleTypeReunion"=>"bleu"]);
// var_dump($m);
// $D = TypesReunionsManager::add($m);
// var_dump($D);

// //Update TypesReunionsManager : ok
// $m = TypesReunionsManager::findById(1);
// var_dump($m);
// $m->setLibelleTypeReunion("Cuisine");
// var_dump($m);
// TypesReunionsManager::update($m);

// //Delete TypesReunionsManager : ok
// $m = TypesReunionsManager::findById(2);
// TypesReunionsManager::delete($m);

// //Get Liste TypesReunionsManager : ok
// $tableau = TypesReunionsManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();
// }