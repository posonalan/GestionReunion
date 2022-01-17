<?php
$liste = TachesManager::getList();
?>
<div class="demiPage colonne">
    <div id="crudBarreOutil">
        <a class=" crudBtn crudBtnOutil" href='index.php?page=formTache&mode=Ajouter'><?php echo texte('Ajouter') ?></a>
    </div>
    <div id="crudTableau2Col">

    <div class="crudColonne"><?php echo texte('libelleTache') ?></div>
    <div class="crudColonne"><?php echo texte('dateEcheanceTache') ?></div>
    <div class="crudColonne"><?php echo texte('idEtatAvancement') ?></div>
    <div class="crudColonne"><?php echo texte('idUtilisateur') ?></div>
    <div class="crudColonne"><?php echo texte('idPrioriteTache') ?></div>
       <div></div>
        <div></div>
        <div></div>
        <div></div>
        <?php foreach ($liste as $elt) {
            echo '<div class="crudColonne">' . $elt->getLibelleTache() . '</div>
            <div class="crudColonne">' . $elt->getDateEcheanceTache() . '</div>';
            $unEtatAvancement = EtatsAvancementsManager::findById($elt->getIdEtatAvancement());
            echo ' <div class="crudColonne">' . $unEtatAvancement->getLibelleEtatAvancement() . '</div>';
            $unUtilisateur = UtilisateursManager::findById($elt->getIdUtilisateur());
            echo ' <div class="crudColonne">' . $unUtilisateur->toString() . '</div>';
        
            $unPrioriteTache = PrioritesTachesManager::findById($elt->getIdPrioriteTache());
            echo ' <div class="crudColonne">' . $unPrioriteTache->toString() . '</div>';
           

            echo '<div></div>    
            <a class=" crudBtn crudBtnEditer" href="index.php?page=formTache&mode=Editer&id='. $elt->getIdTache().'">'. texte('Editer') .'</a>
                <a class=" crudBtn crudBtnModifier" href="index.php?page=formTache&mode=Modifier&id='.$elt->getIdTache().'">'. texte('Modifier') .'</a>
                <a class=" crudBtn crudBtnSupprimer" href="index.php?page=formTache&mode=Supprimer&id='. $elt->getIdTache().'">'. texte('Supprimer') .'</a>
            ';
        } ?>

    </div>
</div>

