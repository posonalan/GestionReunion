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

$listeEtatAvancement = EtatsAvancementsManager::getList();

// on crée les inputs du formulaire
// il faut que les name des input correspondent aux attributs de la class
// si on a les informations (cas Editer, Modifier, supp) on les mets à jour
echo '  <input type="hidden" name="idTache" value="' . $tac->getIdTache() . '">';
echo '  <label>' . texte('Libelle') . ' :</label>
        <input type="text" name="libelleTache" value="' . $tac->getLibelleTache() . '"' . $disabled . '>';
echo '  <label>' . texte('DateEcheanceTache') . ' :</label>
        <input type="number" name="DateEcheanceTache" value="' . $tac->getDateEcheanceTache() . '"' . $disabled . '>';

echo '  <label>' . texte('EtatsAvancements') . ' :</label>
        <select name="idEtatAvancement" ' . $disabled . '>';
foreach ($listeEtatAvancement as $unEtat) {
    $sel = "";
    if ($unEtat->getIdEtatAvancement() == $idEtat) {
        $sel = "selected";
    }

    echo '<option value="' . $unEtat->getIdEtatAvancement() . '" ' . $sel . ' >' . $unEtat->getLibelleEtatAvancement() . '</option>';
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
