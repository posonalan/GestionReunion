<?php
$defaultMode =  $_GET['mode'];
$modeTraduit = ($defaultMode);
echo '<div class="demiPage colonne">';
echo '<div id="DivSousTitre" >';

$disabled = " ";
switch ($defaultMode) {
    case "Editer":
    case "Supprimer":
        $disabled = " disabled ";
        break;
}

echo '<h5>' . $modeTraduit . 'CrudTache' . '</h5></div>
<form id="formulaire" method="post" action="index.php?page=ActionTache&mode=' . $defaultMode . '">';
if (isset($_GET['id'])) {
    $tac = TachesManager::findById($_GET['id']);
    $listeEtatAvancement = EtatsAvancementsManager::getList();
    $listeUtilisateur = UtilisateursManager::getList();
    $listePrioriteTache = PrioritesTachesManager::getList(); 
    $idUtil=$tac->getIdUtilisateur();
    $idEtat=$tac->getIdEtatAvancement();
    $idPrio=$tac->getIdPrioriteTache();
} else {
    $tac = new Taches();
    $idEtat = null;
    $idUtil = null;
    $idPrio = null;
}

$listeEtatAvancement = EtatsAvancementsManager::getList();

// on crée les inputs du formulaire
// il faut que les name des input correspondent aux attributs de la class
// si on a les informations (cas Editer, Modifier, supp) on les mets à jour
echo '  <input type="hidden" name="idTache" value="' . $tac->getIdTache() . '">';
echo '  <label>Libelle:</label>
        <input type="text" name="libelleTache" value="' . $tac->getLibelleTache() . '"' . $disabled . '>';
echo '  <label>DateEcheanceTache :</label>
        <input type="date" name="DateEcheanceTache" value="' . $tac->getDateEcheanceTache() . '"' . $disabled . '>';

echo '  <label>EtatsAvancements:</label>
        <select name="idEtatAvancement" ' . $disabled . '>';
foreach ($listeEtatAvancement as $unEtat) {
    $sel = "";
    if ($unEtat->getIdEtatAvancement() == $idEtat) {
        $sel = "selected";
    }

    echo '<option value="' . $unEtat->getIdEtatAvancement() . '" ' . $sel . ' >' . $unEtat->getLibelleEtatAvancement() . '</option>';
}
echo '</select>';
echo '  <label>Utilisateurs :</label>
        <select name="idUtilisateur" ' . $disabled . '>';
foreach ($listeUtilisateur as $unUtil) {
    $sel = "";
    if ($unUtil->getIdUtilisateur() == $idUtil) {
        $sel = "selected";
    }

     echo '<option value="' . $unUtil->getIdUtilisateur() . '" ' . $sel . ' >' . $unUtil->getNomUtilisateur() ." ".$unUtil->getPrenomUtilisateur() . '</option>';
  
}
echo '</select>';
echo '  <label>PrioritesTaches :</label>
        <select name="idPrioriteTache" ' . $disabled . '>';
foreach ($listePrioriteTache as $unPrio) {
    $sel = "";
    if ($unPrio->getIdPrioriteTache() == $idPrio) {
        $sel = "selected";
    }

    echo '<option value="' . $unPrio->getIdPrioriteTache() . '" ' . $sel . ' >' . $unPrio->getLibellePrioriteTache() . '</option>';
}
echo '</select>';

if ($defaultMode != 'Editer'){ 
    echo '<input type="submit" value="' . $modeTraduit . '" class=" crudBtn crudBtn' . $defaultMode . '"/>';
}else {echo '<div></div>';}
echo '
<a href="index.php?page=listeTache" class=" crudBtn crudBtnRetour">Annuler</a>
</div>
</form>';
