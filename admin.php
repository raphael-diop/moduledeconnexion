<?php
// // SE CONNECTER A LA BASE DE DONNEE
$bdd = mysqli_connect('localhost', 'root', '', 'moduleconnexion');
// // ENCODER LA BASE DE DONNEE
 mysqli_set_charset($bdd , 'utf-8');

 $request = mysqli_query($bdd, "SELECT*FROM utilisateurs");
 


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acceuil.css">
    <title>admin</title>
</head>
<body>
   <header>
   <ul>
        <li><a href="index.php">Acceuil</a></li>
        <li><a href="inscription.php">Inscription</a></li>
        <li><a href="connexion.php">Connexion</a></li>
    </ul>
   </header>

    <ul>
        <?php while($r = $request-> fetch_array( MYSQLI_ASSOC)){ ?>
        <table>
            <th>
                <tr><?php echo "<b>" .$r['login']. "</b>"?> : <tr> 
            </th>
            <td>
                <tr><?php echo $r['prenom'] ?> , </tr>
                <tr><?php echo $r['nom'] ?> , </tr>
                <tr><?php echo $r['instrument'] ?> , </tr>
                <tr><?php echo $r['password'] ?> , </tr>
            </td>
        </table>
        <?php   } ?>
    </ul>
    
</body>
</html>