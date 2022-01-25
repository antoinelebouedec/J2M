<!DOCTYPE html>
<html>
    <head>
        <title>Site J2M</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script src="script.js" async></script>
    </head>

    <body>

        <?php
            $user = 'root';
            $pass = '';
            $db = 'j2m';
            $db = new mysqli ('localhost', $user, $pass, $db) or die("unable to connect");

            
        ?>

        <header>
            <img class="logo" src="img/logo.png">
            <!--Création du bandeau de gauche avec les menus-->
            <div class="bandeau">
                <nav>
                    <ul>
                        <li>
                            <button class="togg" id="togg1">Statistique</button>
                        </li>  
                        <li>
                            <button class="togg" id="togg2">Devis</button>
                        </li>   
                        <li>
                            <button class="togg" id="togg3">Images</button>
                        </li>   
                        <li>
                            <button class="togg" id="togg4">Pages</button>
                        </li>
                    </ul>
                </nav>
            </div>  
        </header>

        <div id="d0">
            <h1>Bonjour Julien</h1>
            <button class="togg5"><a href="../Connexion/index.php">Se déconnecter</a></button>
        </div>

        <div id="d1" class="menu"></div>


        <div id="d2" class="menu">

            <?php

                $sql="SELECT * FROM devis";
                $result=mysqli_query($db,$sql) or die("bad query");

                echo "<table border='1' class='tableau__devis'>";
                echo "<tr><td>Nom</td> <td>Prénom</td> <td>Téléphone</td> <td>Adresse</td> <td>Ville</td> <td>Objet</td></tr>";


                while($row=mysqli_fetch_assoc($result))
                {
                    echo"<tr>
                        <td>{$row['nom']}</td> 
                        <td>{$row['prenom']}</td> 
                        <td>{$row['telephone']}</td> 
                        <td>{$row['adresse']}</td> 
                        <td>{$row['ville']}</td> 
                        <td>{$row['objet']}</td>
                    </tr>";
                }

                echo "</table>";
            ?>

        </div> 


        
        <div id="d3" class="menu">

            <?php

                $sql="SELECT * FROM devis";
                $result=mysqli_query($db,$sql) or die("bad query");
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
                    <tr>
                </thead>

                <tbody>
                    <tr>
                        <th><?php echo $nom ?></th>
                        <th><?php echo $prenom ?></th>
                        <th><?php echo $telephone ?></th>
                        <th><?php echo $adresse ?></th>
                        <th><?php echo $ville ?></td> ?></th>
                        <th><?php echo $objet ?></td> ?></th>
                    <tr>
                </tbody>
            </table>

        </div>
        <div id="d4" class="menu"></div>
        <div id="d5" class="menu"></div>


    </body>
</html>