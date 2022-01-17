<?php
$pasDErreur = true;
var_dump($_POST);
$p = new Salles($_POST);
var_dump($p);
switch ($_GET['mode']) {
    case "Ajouter": {
            $pasDErreur = SallesManager::add($p);
            break;
        }
    case "Modifier": {

            $pasDErreur = SallesManager::update($p);
            break;
        }
    case "Supprimer": {

            $pasDErreur = SallesManager::delete($p);
            break;
        }
}
if ($pasDErreur) { // si pas d'erreur
    header("location:index.php?page=listeSalle");
} else {
    header("location:index.php?page=erreur&cible=listeSalle&codeErreur=erreur" . $_GET['mode']);
}
