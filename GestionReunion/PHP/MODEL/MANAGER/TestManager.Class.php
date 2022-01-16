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

//*********************************FichiersManager**************************** *//

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
//*********************************SujetsManager**************************** *//
// ADD SujetsManager : ok
// $m = new Sujets(["libelleSujet"=>"test","tempsAlloue"=>'00:20:00',"idOrateur"=>2]);
// var_dump($m);
// $D = SujetsManager::add($m);
// var_dump($D);

//Update SujetsManager : ok
// $m = SujetsManager::findById(1);
// var_dump($m);
// $m->setlibelleSujet("Utilisateur");
// var_dump($m);
// SujetsManager::update($m);

//Delete SujetsManager : ok
// $m = SujetsManager::findById(2);
// SujetsManager::delete($m);

//Get Liste SujetsManager : ok
// $tableau = SujetsManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();

//*********************************TachesManager**************************** *//
// ADD TachesManager : ok
// $m = new taches(["libelleTache"=>"test commercial","dateEcheanceTache"=>'2013-10-23',"idEtatAvancement"=>1 ,"idUtilisateur"=> 1,"idPrioriteTache"=>1]);
// var_dump($m);
// $D = tachesManager::add($m);
// var_dump($D);

// //Update TachesManager : ok
// $m = TachesManager::findById(1);
// var_dump($m);
// $m->setLibelleTache("pierrik");
// var_dump($m);
// TachesManager::update($m);

// //Delete TachesManager : ok
// $m = TachesManager::findById(1);
// TachesManager::delete($m);

// //Get Liste TachesManager : ok
// $tableau = TachesManager::getList();
//foreach ($tableau as $info)
// {
//     echo $info->toString();

//*********************************GestionsTachesManager**************************** *//
// ADD GestionsTachesManager : ok
// $m = new Gestionstaches(["idReunion"=>3,"idTache"=>2]);
// var_dump($m);
// $D = GestionsTachesManager::add($m);
// var_dump($D);



// //Update GestionsTachesManager : ok
// $m = GestionsTachesManager::findById(11);
// var_dump($m);
// $m->setIdReunion("4");
// var_dump($m);
// GestionsTachesManager::update($m);

// //Delete GestionsTachesManager : ok
// $m = GestionsTachesManager::findById(1);
// GestionsTachesManager::delete($m);

//Get Liste GestionsTachesManager : ok
// $tableau = GestionsTachesManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();

// }

//*********************************StatutsPresencesManager**************************** *//

// ADD StatutsPresencesManager : ok
// $m = new StatutsPresences(["libelleStatutPresence"=> "present"]);
// var_dump($m);
// $D = StatutsPresencesManager::add($m);
// var_dump($D);



// //Update StatutsPresencesManager : ok
// $m = StatutsPresencesManager::findById(1);
// var_dump($m);
// $m->setlibelleStatutPresence("absent");
// var_dump($m);
// StatutsPresencesManager::update($m);

// //Delete StatutsPresencesManager : ok
// $m = StatutsPresencesManager::findById(2);
// StatutsPresencesManager::delete($m);

// //Get Liste StatutsPresencesManager : ok
// $tableau = StatutsPresencesManager::getList();
// foreach ($tableau as $info)
// {
//     echo $info->toString();

// // }
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