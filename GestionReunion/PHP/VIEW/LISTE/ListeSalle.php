<?php
$liste = SallesManager::getList();
?>
<div class="demiPage colonne">
    <div id="crudBarreOutil">
        <a class=" crudBtn crudBtnOutil" href='index.php?page=FormSalle&mode=Ajouter'>Ajouter</a>
    </div>
    <div id="crudTableau2Col">

    <div class="crudColonne">libelle</div>
    <div class="crudColonne">tailleMaxSalle</div>
       <div></div>
        <div></div>
        <div></div>
        <div></div>
        <?php foreach ($liste as $elt) {

            echo '<div class="crudColonne">' . $elt->getLibelleSalle() . '</div>
            <div class="crudColonne">' . $elt->getTailleMaxSalle() . '</div>
            <div></div>    
            <a class=" crudBtn crudBtnEditer" href="index.php?page=FormSalle&mode=Editer&id='. $elt->getIdSalle().'">Editer</a>
                <a class=" crudBtn crudBtnModifier" href="index.php?page=FormSalle&mode=Modifier&id='.$elt->getIdSalle().'">Modifier</a>
                <a class=" crudBtn crudBtnSupprimer" href="index.php?page=FormSalle&mode=Supprimer&id='. $elt->getIdSalle().'">Supprimer</a>
            ';
        } ?>

    </div>
</div>