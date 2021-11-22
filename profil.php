<?php
session_start();
// // SE CONNECTER A LA BASE DE DONNEE
$bdd = mysqli_connect('localhost', 'root', '', 'moduleconnexion');
// // ENCODER LA BASE DE DONNEE
 mysqli_set_charset($bdd , 'utf-8');
$message = "";
 if(isset($_POST['login']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['password']) && isset($_POST['instrument']) && isset($_POST['password_retype'])){
    $id = $_SESSION['id'];
    $login = htmlspecialchars($_POST['login']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $password = htmlspecialchars($_POST['password']);
    $instrument = htmlspecialchars($_POST['instrument']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $requete = mysqli_query($bdd, "UPDATE utilisateurs SET  login = '$login', prenom = '$prenom', nom = '$nom', password = '$password', instrument = '$instrument' WHERE id = $id");
    if($requete == 1){
        $message = 'Modifications sauvgardés';
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
    <title>Modificatoion Profil</title>
</head>
<body>

<?php require 'fixe.php' ?>

<main class="main2">
    <form class="formContainer" action="" method="post">
        <h1>Modification de Profil</h1>
        <?php echo "<strong>" .$message. "</strong>" ?>
        <p><input type="text" name="login" class="zonetext" required= "required" placeholder="<?php if(isset($login)){echo $login; }else{ echo $_SESSION['login'];}?>"></p>
        <p><input type="text" name="prenom" class="zonetext" required= "required" placeholder="<?php if(isset($prenom)){echo $prenom; }else{ echo $_SESSION['prenom'];}?>"></p>
        <p><input type="text" name="nom" class="zonetext" required= "required" placeholder="<?php if(isset($nom)){echo $nom; }else{ echo $_SESSION['nom'];}?>"></p>
        <p><input type="text" name="instrument" class="zonetext" required= "required" placeholder="<?php if(isset($instrument)){echo $instrument; }else{ echo $_SESSION['instrument'];}?>"></p>
        <p><input type="password" name="password" class="zonetext" required= "required" placeholder="Password"></p>
        <p><input type="password" name="password_retype" class="zonetext" required= "required" placeholder="Password Confirmation ..."></p>
        <p><button type="submit" name="modification">Enregistrer</button></p>
    </form>
</main>

    <?php require 'footer.php' ?>
</body>
</html>