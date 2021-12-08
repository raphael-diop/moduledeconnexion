<?php 
// // SE CONNECTER A LA BASE DE DONNEE
 $bdd = mysqli_connect('localhost:3306', 'raphael-diop', 'Legende456@', 'raphael-diop_moduleconnexion');
// // ENCODER LA BASE DE DONNEE
 mysqli_set_charset($bdd , 'utf-8');
// // FAIRE LA REQUETE 

$message = "";
 if(isset($_POST['login']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['password']) && isset($_POST['instrument']) && isset($_POST['password_retype'])){
     $login = htmlspecialchars($_POST['login']);
     $prenom = htmlspecialchars($_POST['prenom']);
     $nom = htmlspecialchars($_POST['nom']);
     $password = htmlspecialchars($_POST['password']);
     $instrument = htmlspecialchars($_POST['instrument']);
     $password_retype = htmlspecialchars($_POST['password_retype']);

     $request = mysqli_query($bdd, "SELECT*FROM utilisateurs WHERE login = '$login'");
     $result = $request-> fetch_array( MYSQLI_ASSOC);

     if($password === $password_retype){
         if(count($result) == 0){
            $requete = mysqli_query($bdd, "INSERT INTO `utilisateurs`(`login`, `prenom`, `nom`, `password`, `instrument`) VALUES ( '$login', '$prenom', '$nom', '$password', '$instrument')");
            header('location:connexion.php');
         }else{ 
            $message = "Login déja existant";
         }  
     }else{
         $message = "Mots de passe non-identiques";
     }
    
 }

?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acceuil.css">
    <title>formulaire inscription</title>
</head>
<body>
        <?php include 'fixe.php'?>

    <main class="main">
    <form class="formContainer" action="" method="post">
        <h1>FORMULAIRE D'INSCRIPTION</h1>
        <?php  echo "<p>".$message. "</p>"?>
        <p><input type="text" name="login" class="zonetext" placeholder="Login..."></p>
        <p><input type="text" name="prenom" class="zonetext"  placeholder="Prénom ..."></p>
        <p><input type="text" name="nom" class="zonetext"  placeholder="Nom  ..."></p>
        <p><input type="text" name="instrument" class="zonetext"  placeholder="Instrument..."></p>
        <p><input type="password" name="password" class="zonetext"  placeholder="Password ..."></p>
        <p><input type="password" name="password_retype" class="zonetext"  placeholder="Password Confirmation ..."></p>
        <p><input type="submit" class="boutonvalidation" name="submit"></p>

    </form>
    </main>

        <?php include 'footer.php' ?>
    
    
</body>
</html>