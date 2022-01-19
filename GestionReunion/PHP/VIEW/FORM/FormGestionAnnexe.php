<?php
$defaultMode =  $_GET['mode'];
$modeTraduit = texte($defaultMode);
echo '<div class="demiPage colonne">';
echo '<div id="DivSousTitre" >';

$disabled = " ";
switch ($defaultMode) {
    case "Editer":
    case "Supprimer":
        $disabled = " disabled ";
        break;
}

echo '<h5>' . $modeTraduit . texte('CrudGestionAnnexe') . '</h5></div>
<form id="formulaire" method="post" action="index.php?page=actionGestionAnnexe&mode=' . $defaultMode . '">';
if (isset($_GET['id'])) {
    $ges = GestionsAnnexesManager::findById($_GET['id']);
    $idReu = $ges->getIdReunion();
    $idFic = $ges->getIdFichierAnnexe();
   
} else {
    $ges = new GestionsAnnexes();
    $idReu = null;
    $idFic =null;
 
}

$listeReunion = ReunionsManager::getList();
$listeFichierAnnexe = FichiersAnnexesManager::getList();

// on crée les inputs du formulaire
// il faut que les name des input correspondent aux attributs de la class
// si on a les informations (cas Editer, Modifier, supp) on les mets à jour
echo '  <input type="hidden" name="idGestionAnnexe" value="' . $tac->getIdGestionAnnexe(); 

echo '  <label>Reunion :</label>
        <select name="idReunion" ' . $disabled . '>';
foreach ($listeReunion as $uneReunion) {
    $sel = "";
    if ($uneReunion->getIdEtatAvancement() == $idEtat) {
        $sel = "selected";
    }

    echo '<option value="' . $uneReunion->getIdEtatAvancement() . '" ' . $sel . ' >' . $uneReunion->getLibelleEtatAvancement() . '</option>';
}

echo '  <label>' . texte('Utilisateurs') . ' :</label>
        <select name="idUtilisateur" ' . $disabled . '>';
foreach ($listeUtilisateur as $unUtil) {
    $sel = "";
    if ($unUtil->getIdUtilisateur() == $idUtil) {
        $sel = "selected";
    }

    echo '<option value="' . $unUtil->getIdUtilisateur() . '" ' . $sel . ' >' . $unUtil->getNomUtilisateur() . '</option>';
    echo '<option value="' . $unUtil->getIdUtilisateur() . '" ' . $sel . ' >' . $unUtil->getPrenomUtilisateur() . '</option>';
}

echo '  <label>' . texte('PrioritesTaches') . ' :</label>
        <select name="idPrioriteTache" ' . $disabled . '>';
foreach ($listePrioriteTache as $unPrio) {
    $sel = "";
    if ($unPrio->getIdPrioriteTache() == $idPrio) {
        $sel = "selected";
    }

    echo '<option value="' . $unPrio->getIdPrioriteTache() . '" ' . $sel . ' >' . $unPrio->getLibellePrioriteTache() . '</option>';

}
echo '</select>';

if ($defaultMode != 'Editer')
    echo '<input type="submit" value="' . $modeTraduit . '" class=" crudBtn crudBtn' . $defaultMode . '"/>';
else echo '<div></div>';
echo '
<a href="index.php?page=listeTache" class=" crudBtn crudBtnRetour">' . texte('Annuler') . '</a>
</div>
</form>';
