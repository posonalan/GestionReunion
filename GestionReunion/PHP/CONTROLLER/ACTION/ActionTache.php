<?php
$pasDErreur = true;
var_dump($_POST);
$p = new Taches($_POST);
var_dump($p);
switch ($_GET['mode']) {
    case "Ajouter": {
            $pasDErreur = TachesManager::add($p);
            break;
        }
    case "Modifier": {

            $pasDErreur = TachesManager::update($p);
            break;
        }
    case "Supprimer": {

            $pasDErreur = TachesManager::delete($p);
            break;
        }
}
if ($pasDErreur) { // si pas d'erreur
    header("location:index.php?page=listeTache");
} else {
    header("location:index.php?page=erreur&cible=listeTache&codeErreur=erreur" . $_GET['mode']);
}
