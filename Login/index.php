<?php 
  session_start();

  if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { 
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Site J2M</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        
    </head>

    <body>

        <header>
            <img class="logo" src="img/logo.png">
            <!--Création du bandeau de gauche avec les menus-->
            <div class="bandeau">
                <button class="togg"><a href="logout.php">DECONNEXION</a></button>
            </div>  
        </header>

        <div id="d0">
            <h1>Bonjour <?= $_SESSION['user_full_name'] ?></h1>
  		</div>


        <div id="d1" class="menu">

            <?php

                $objetPdo = new PDO('mysql:host=localhost;dbname=j2m', 'root', '');

                $pdoStat = $objetPdo ->prepare('SELECT * FROM devis');

                $executeIsOk = $pdoStat->execute();

                $devis = $pdoStat->fetchAll();

            ?>

            <table class="tableau__devis">

                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Adresse</th>
                            <th>Ville</th>
                            <th>Objet</th>
                        </tr>
                    </thead>
                    
                <?php foreach ($devis as $devis): ?>
                    

                    <tbody>
                        <tr>
                            <td><?= $devis['nom'] ?></td>
                            <td><?= $devis['prenom'] ?></td>
                            <td><?= $devis['telephone'] ?></td>
                            <td><?= $devis['adresse'] ?></td>
                            <td><?= $devis['ville'] ?></td>
                            <td><?= $devis['objet'] ?></td>
                        </tr>
                    </tbody>
                    
                <?php endforeach ?>
            </table>

        </div> 

    </body>
</html>

<?php 
}else {
   header("Location: login.php");
}
 ?> 