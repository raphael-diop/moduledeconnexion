<?php
session_start();
$_SESSION = '';
// // SE CONNECTER A LA BASE DE DONNEE
$bdd = mysqli_connect('localhost', 'root', '', 'moduleconnexion');
// // ENCODER LA BASE DE DONNEE
 mysqli_set_charset($bdd , 'utf-8');
// // FAIRE LA REQUETE 
$message = "";
$message2 = "";
$message3 = "";
if(isset($_POST['login']) && isset($_POST['password'])){
    
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    $request = mysqli_query($bdd, "SELECT*FROM utilisateurs WHERE login = '$login'");
    $result = $request-> fetch_array( MYSQLI_ASSOC);

    if(count($result)== 0){

        header('location:inscription.php');
        
    }
    else if( $result['password'] != $password ){

        $message = "PASSWORD INVALIDE";
    }
    else if($result['password'] == 'admin'){
        header('location:admin.php');
    }
    else{
        $message = 'CONNEXION REUSSI';
        $message2 = 'Retour à la page Acceuil';
        $message3 = 'Modifier son profil';
        $_SESSION = $result;
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acceuil.css">
    <title>Connexion</title>
</head>
<body>

    <?php require 'fixe.php' ?>

    <main class="main2">
    <form class="formContainer" method="post" action="">
        <h1>CONNEXION</h1>

        
        <?php  echo '<p>'. '<strong>'.$message.'</strong>' . '</p>'?>
       

        <p><input type="text" name="login" class="zonetext"  placeholder="Login..."></p>
        <p><input type="password" name="password" class="zonetext"  placeholder="Password ..."></p>
        <p><input type="submit" class="boutonvalidation" name="champformulaire                          "></p>

        <div>
            
                <a href="index.php"><?php  echo '<p>'. '<strong>'.$message2.'</strong>' . '</p>'?><a/>
           
        </div>
        <div>
            <h3><a href="profil.php"><?php  echo '<p>'. '<strong>'.$message3.'</strong>' . '</p>'?><a/></h3>
        </div>
    </form>
    </main>
 
    <?php require 'footer.php' ?><
    
</body>


</html>