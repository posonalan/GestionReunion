<header>
    <div class="haut">
        <div class="hautPartie0">
            <img src="./IMG/FR.png" alt="" /> 
            <img src="./IMG/FR.png" alt="" />
        </div>
        <div class="hautPartie1"><img src="./IMG/chat.png" alt="" /></div>
        <div class="hautPartie2 textemulticolore">Animal'N'Co</div>
        <div class="hautPartie3"><img src="./IMG/chien.png" alt="" /></div>
        <!-- <div class="hautPartie4">
            <div class="logo"><img src="./IMG/tel.png" alt="" /><a href="http://www.exempledesiteweb.com/exemple.html#blablabla"></div>
   <div ><img src="./IMG/facebook.png" alt="" /><a href="http://www.exempledesiteweb.com/exemple.html#blablabla"></div>
            <div class="logo"><img src="./IMG/twitter.png" alt="" /><a href="http://www.exempledesiteweb.com/exemple.html#blablabla"></div>
     
        </div> -->
        
        <?php

if (isset($_SESSION['utilisateur'])) {
    echo '<div class="texteColore centrer">Bonjour' ." ". $_SESSION['utilisateur']->getNom() . '</div>';
    echo '<div><a href="index.php?page=deconnection" class="texteColore centrer">Deconnecter</a></div>';
} else {
    echo '<a href="index.php?page=connection" class="texteColore centrer">Connexion</a>';
}

?>


    </div>
    </div>
</header>