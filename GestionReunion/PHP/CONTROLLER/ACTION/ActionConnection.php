<?php
$uti = UtilisateursManager::findByPrenom($_POST['prenom']);
if ($uti != false) {
    echo "motBDD " . $uti->getMotDePasseUtlisateur() . "  saisi" . $_POST['motDePasseUtilisateur'] . "crypte   " . crypte($_POST['motDePasseUtilisateur']) . "<br>";
    if (crypte($_POST['motDePasse']) == $uti->getMotDePasseUtilisateur()) {
        echo 'connection reussie';
        $_SESSION['utilisateur'] = $uti;
        header("location:index.php?page=accueil");
    } else {
        header("location:index.php?page=erreur&cible=connection&codeErreur=MdpIncorrect");
    }
} else {
    header("location:index.php?page=erreur&cible=connection&codeErreur=PseudoUnkn");
}
