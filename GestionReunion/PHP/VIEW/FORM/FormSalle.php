<?php
$defaultMode =  $_GET['mode']; //mode en fr
// $modeTraduit = $defaultMode; // On traduit le mode pour la gestion des affichages
echo '<div class="demiPage colonne">';
echo '<div id="DivSousTitre">';


$disabled = " ";
switch ($defaultMode) {
    case "Editer":
    case "Supprimer":
        $disabled = " disabled ";
        break;
}
echo '  <h5>CrudSalle</h5></div>
        <form id="formulaire" method="post" action="index.php?page=actionSalle&mode='.$defaultMode.'">';

if (isset($_GET['id'])) {
    $salle = SallesManager::findById($_GET['id']);
}
else{
    $salle = new Salles();
}

echo '  <input type="hidden" name="idSalle" value="' . $salle->getIdSalle() . '">';
echo '  <label>libelleSalle :</label>
        <input type="text" name="libelleSalle" value="' . $salle->getLibelleSalle() . '"' .$disabled.'>';
        echo '  <label>tailleMaxSalle :</label>
        <input type="text" name="tailleMaxSalle" value="' . $salle->getTailleMaxSalle() . '"' .$disabled.'>';
    if ($defaultMode != 'Editer')
echo '<input type="submit" value="'.$defaultMode.'" class=" crudBtn crudBtn'.$defaultMode.'"/>';
else echo '<div></div>';
echo '<a href="index.php?page=ListeSalle" class=" crudBtn crudBtnRetour">Annuler</a>
</form>';