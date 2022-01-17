<?php
$liste = SallesManager::getList();
?>
<div class="demiPage colonne">
    <div id="crudBarreOutil">
        <a class=" crudBtn crudBtnOutil" href='index.php?page=formSalle&mode=Ajouter'><?php echo texte('Ajouter') ?></a>
    </div>
    <div id="crudTableau2Col">

    <div class="crudColonne"><?php echo texte('Libelle') ?></div>
    <div class="crudColonne"><?php echo texte('TailleMaxSalle') ?></div>
       <div></div>
        <div></div>
        <div></div>
        <div></div>
        <?php foreach ($liste as $elt) {

            echo '<div class="crudColonne">' . $elt->getLibelleSalle() . '</div>
            <div class="crudColonne">' . $elt->getTailleMaxSalle() . '</div>
            <div></div>    
            <a class=" crudBtn crudBtnEditer" href="index.php?page=formSalle&mode=Editer&id='. $elt->getIdSalle().'">'. texte('Editer') .'</a>
                <a class=" crudBtn crudBtnModifier" href="index.php?page=formSalle&mode=Modifier&id='.$elt->getIdSalle().'">'. texte('Modifier') .'</a>
                <a class=" crudBtn crudBtnSupprimer" href="index.php?page=formSalle&mode=Supprimer&id='. $elt->getIdSalle().'">'. texte('Supprimer') .'</a>
            ';
        } ?>

    </div>
</div>