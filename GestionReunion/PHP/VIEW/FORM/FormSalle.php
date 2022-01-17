<?php
$defaultMode =  $_GET['mode']; //mode en fr
$modeTraduit = texte($defaultMode); // On traduit le mode pour la gestion des affichages
echo '<div class="demiPage colonne">';
echo '<div id="DivSousTitre">';


$disabled = " ";
switch ($defaultMode) {
    case "Editer":
    case "Supprimer":
        $disabled = " disabled ";
        break;
}
echo '  <h5>'.$modeTraduit . texte('CrudSalle') .'</h5></div>
        <form id="formulaire" method="post" action="index.php?page=actionSalle&mode='.$defaultMode.'">';

if (isset($_GET['id'])) {
    $salle = SallesManager::findById($_GET['id']);
}
else{
    $salle = new Salles();
}

echo '  <input type="hidden" name="idSalle" value="' . $categ->getIdSalle() . '">';
echo '  <label>'. texte('Libelle').' :</label>
        <input type="text" name="libelleSalle" value="' . $categ->getLibelleSalle() . '"' .$disabled.'>';
        echo '  <label>'. texte('TailleMaxSalle').' :</label>
        <input type="text" name="tailleMaxSalle" value="' . $categ->getTailleMaxSalle() . '"' .$disabled.'>';
    if ($defaultMode != 'Editer')
echo '<input type="submit" value="'.$modeTraduit.'" class=" crudBtn crudBtn'.$defaultMode.'"/>';
else echo '<div></div>';
echo '<a href="index.php?page=listeSalle" class=" crudBtn crudBtnRetour">'. texte('Annuler') .'</a>
</form>';