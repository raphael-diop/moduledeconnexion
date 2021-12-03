<?php

$message1 = '';
$message2 = '';
$message3 = '';
$message4 = '';
$message5 = '';
$message6 = '';

if(isset($_SESSION['login'])){
    if($_SESSION['login'] != 'admin' ){
        $message5 = 'Acceuil';
        $message3 = 'Deconnexion';
        $message6 = 'Modification Profil';
    }
    else if($_SESSION['login'] == 'admin'){
        $message5 = 'Acceuil';
        $message3 = 'Deconnexion';
        $message6 = 'Modification Profil';
        $message4 = 'Admin';
    }
    
}else{
    $message5 = 'Acceuil';
    $message1 = 'Inscription';
    $message2 = 'Connexion';
}

    

?>




<html>


    <header >
        <nav>
            <div class="logo">
                <div class="retouracceuil">
                    <h1><a href="index.php">Musiteam</h1></a>
                </div>
                <img width="100px" height="100px" src="https://img.myloview.fr/images/logo-de-crane-de-musique-logo-de-crane-modele-de-logo-de-vecteur-400-66991600.jpg">
            </div>
                 <ul>
                    <li><a href="index.php"><?php  echo '<p>'. '<strong>'.$message5.'</strong>' . '</p>'?></a></li>
                    <li><a href="inscription.php"> <?php  echo '<p>'. '<strong>'.$message1.'</strong>' . '</p>'?></a></li>
                    <li><a href="connexion.php"> <?php  echo '<p>'. '<strong>'.$message2.'</strong>' . '</p>'?></a></li>
                    <li><a href="Deconnexion.php"> <?php  echo '<p>'. '<strong>'.$message3.'</strong>' . '</p>'?></a></li>
                    <li><a href="admin.php"> <?php  echo '<p>'. '<strong>'.$message4.'</strong>' . '</p>'?></a></li>
                    <li><a href="profil.php"><?php  echo '<p>'. '<strong>'.$message6.'</strong>' . '</p>'?></a></li>
                </ul>
            </div>
        </nav>
    </header>
    
</html>


