<?php
$liste = TachesManager::getList();
?>
<div class="demiPage colonne">
    <div id="crudBarreOutil">
        <a class=" crudBtn crudBtnOutil" href='index.php?page=formTache&mode=Ajouter'> Ajouter </a>
    </div>
    <div id="crudTableau5Col">

    <div class="crudColonne">LibelleTache</div>
    <div class="crudColonne">DateEcheanceTache</div>
    <div class="crudColonne">libelleEtatEtatAvancement</div>
    <div class="crudColonne">Utilisateur</div>
    <div class="crudColonne">LibellePrioriteTache</div>
        <div></div>
        <div></div>
        <div></div>
        <div></div> 
        <?php foreach ($liste as $elt) {
            echo '<div class="crudColonne">' . $elt->getLibelleTache() . '</div>';
            echo '<div class="crudColonne">' . $elt->getDateEcheanceTache() . '</div>';
            $unEtatAvancement = EtatsAvancementsManager::findById($elt->getIdEtatAvancement());
            echo ' <div class="crudColonne">' . $unEtatAvancement->getLibelleEtatAvancement() . '</div>';
            $unUtilisateur = UtilisateursManager::findById($elt->getIdUtilisateur());
            echo ' <div class="crudColonne">' . $unUtilisateur->toString() . '</div>';
        
            $unPrioriteTache = PrioritesTachesManager::findById($elt->getIdPrioriteTache());
            echo ' <div class="crudColonne">' . $unPrioriteTache->getLibellePrioriteTache() . '</div>';
           
 
            echo '<div></div>   
            <a class=" crudBtn crudBtnEditer" href="index.php?page=formTache&mode=Editer&id='. $elt->getIdTache().'">'. 'Editer' .'</a>
                <a class=" crudBtn crudBtnModifier" href="index.php?page=formTache&mode=Modifier&id='.$elt->getIdTache().'">'. 'Modifier' .'</a>
                <a class=" crudBtn crudBtnSupprimer" href="index.php?page=formTache&mode=Supprimer&id='. $elt->getIdTache().'">'. 'Supprimer' .'</a>
            ';
        } ?>

    </div>
</div>

