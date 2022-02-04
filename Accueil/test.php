<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>J2M Menuiserie</title>
        <link rel="stylesheet" href="public/css/base.css">
        <link rel="stylesheet" href="public/css/header.css">
        <link rel="stylesheet" href="public/css/sectiontest.css">
        <link rel="stylesheet" href="aos-by-red.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="script.js" async></script>
        <script src="https://kit.fontawesome.com/a419204dea.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="header">
            <div class="header__texture"></div>
            <div class="header__mask">
                <svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 100 L 0 0 C 25 100 75 100 100 0 L 100 100" fill="#fff"></path>
                </svg>
            </div>
            <div class="container">
                <div class="header__navbar">
                    <div class="header__navbar--logo">
                        <h1 class="header__navbar--logo-title">J2M Menuiserie</h1>
                    </div>
                    
                    <div class="header__navbar--menu">
                        <a href="index.html" class="header__navbar--menu-link">Accueil</a>
                        <a href="interieure.html" class="header__navbar--menu-link">Interieur</a>
                        <a href="exterieure.html" class="header__navbar--menu-link">Exterieur</a>
                        <a href="sol.html" class="header__navbar--menu-link">Sol et escalier</a>
                        <a href="cloison.html" class="header__navbar--menu-link">Cloison seche</a>
                    </div>
                    <div class="header__navbar-toggle">
                        <span class="header__navbar-toggle-icons"></span>
                    </div>
                </div>


            </div>
        </div>  
        
        <script src="public/js/app.js"></script>

        <button class="header__bouton" onclick="document.getElementById('d1').style.display='block'">DEVIS</button>
        <!--<a href="#contact"><button class="header__bouton" style="font-family: 'Nunito';">Contactez-nous</button></a>-->

<?php
    if(!empty($_POST)){
        if(
            isset($_POST["nom"], $_POST["prenom"], $_POST["telephone"], $_POST["ville"], $_POST["adresse"], $_POST["objet"])
            && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["telephone"]) && !empty($_POST["ville"]) && !empty($_POST["adresse"]) && !empty($_POST["objet"])
        ){
            //Le formulaire est complet
            //On recupere les données en les protégeant
            //On retire toute balise du nom
            $nom = strip_tags($_POST["nom"]);

            //On neutralise toute balise du prenom
            $prenom = htmlspecialchars($_POST["prenom"]);
            $telephone = htmlspecialchars($_POST["telephone"]);
            $ville = htmlspecialchars($_POST["ville"]);
            $adresse = htmlspecialchars($_POST["adresse"]);
            $objet = htmlspecialchars($_POST["objet"]);

            require_once "../Login/db_conn.php";

            // On ecrit la requete
            $sql ="INSERT INTO `devis`(`nom`, `prenom`, `telephone`, `ville`, `adresse`, `objet`) VALUE (:nom, :prenom, :telephone, :ville, :adresse, :objet)";

            $query = $conn->prepare($sql);

            $query->bindValue(":nom", $nom, PDO::PARAM_STR);
            $query->bindValue(":prenom", $prenom, PDO::PARAM_STR);
            $query->bindValue(":telephone", $telephone, PDO::PARAM_STR);
            $query->bindValue(":ville", $ville, PDO::PARAM_STR);
            $query->bindValue(":adresse", $adresse, PDO::PARAM_STR);
            $query->bindValue(":objet", $objet, PDO::PARAM_STR);

            $query->execute();
        }
        else{
            die("Le formulaire est incomplet");
        }
    }
?>

        <div id="d1" class="devis">
            <br/>
            <h2>Demande de devis</h2>
            <form method="POST">
                <div>
                    <label for="form1">Nom</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div>
                    <label for="form2">Prénom</label>
                    <input type="text" name="prenom" id="prenom">
                </div>
                <div>
                    <label for="form3">Telephone</label>
                    <input type="text" name="telephone" id="telephone">
                </div>
                <div>
                    <label for="form4">Prénom</label>
                    <input type="text" name="ville" id="ville">
                </div>
                <div>
                    <label for="form5">Prénom</label>
                    <input type="text" name="adresse" id="adresse">
                </div>
                <div>
                    <label for="form6">Prénom</label>
                    <input type="textarea" name="objet" id="objet">
                </div>
                <button type="submit">Enregistrer</button>
            </form>
            <br/><br/><br/>
            <i onclick="document.getElementById('d1').style.display='none'" class="fas fa-times"></i>
        </div>


        <div class="grid__presentation">
            <div id="box1" class="box"><a href="interieure.html"><img class="imag" id="image__box1" src="../Accueil/public/img/interieure.jpg"></a></div>
            <div id="box2" class="box"><a href="exterieure.html"><img class="imag" id="image__box2" src="../Accueil/public/img/exterieure.jpg"></a></div>
            <div id="box3" class="box"><a href="sol.html"><img class="imag" id="image__box3" src="../Accueil/public/img/escalier.jpg"></a></div>
            <div id="box4" class="box"><a href="cloison.html"><img class="imag" id="image__box4" src="../Accueil/public/img/cloison.jpg"></a></div>
        </div>

        <div class="grid__marquee">
            <div class="real">
                <h1 class="titrereal">NOS REALISATIONS</h1>
                <p class="textereal">Menuiserie interieure et exterieure sur mesure : parquet, placards, meubles, escalier, fenêtres, cuisine, ...</p>
            </div>
    
            <div class="marquee">
                <div class="imgmarquee">
                    <img src="../Accueil/public/img/cuisine1.jpg" alt="image 1">
                    <img src="../Accueil/public/img/cuisine2.jpg" alt="image 2">
                    <img src="../Accueil/public/img/cuisine3.jpg" alt="image 3">
                    <img src="../Accueil/public/img/cuisine4.jpg" alt="image 4">
                    <img src="../Accueil/public/img/cuisine5.jpg" alt="image 5">
                    <img src="../Accueil/public/img/cuisine1.jpg" alt="image 6">
                    <img src="../Accueil/public/img/cuisine2.jpg" alt="image 7">
                    <img src="../Accueil/public/img/cuisine3.jpg" alt="image 8">
                    <img src="../Accueil/public/img/cuisine4.jpg" alt="image 9">
                </div>
            </div>

            <div class="real2">
            <a href="realisation.html"><button class="plusreal"><i class="fas fa-plus"></i></button></a>
            </div>
        </div>

        <div class="grid__choisir">
            <div class="titre__choisir">BONNES RAISONS DE NOUS CHOISIR</div>

            <div class="bloc__image--1">
                <img src="../Accueil/public/img/img1.jpg" alt="image 1">
            </div>

            <div class="titre__image--1">
                <div class="numero">01<br/></div>
                <div class="titre__numero">EXPERTISE</div>
            </div>

            <div class="bloc__image--2">
                <img src="../Accueil/public/img/img2.jpg" alt="image 1">
            </div>

            <div class="titre__image--2">
                <div class="numero">02<br/></div>
                <div class="titre__numero">FINITION SOIGNEES</div>
            </div>

            <div class="bloc__image--3">
                <img src="../Accueil/public/img/img3.jpg" alt="image 1">
            </div>

            <div class="titre__image--3">
                <div class="numero">03<br/></div>
                <div class="titre__numero">TARIFS CONCURRENTIELS</div>
            </div>
        </div>


        <div class="grid__choisir2">
            <div class="titre__choisir2">BONNES RAISONS DE NOUS CHOISIR</div>

            <div class="bloc__image--1">
                <img src="../Accueil/public/img/img1.jpg" alt="image 1">
            </div>

            <div class="titre__image--1">
                <div class="numero">01<br/></div>
                <div class="titre__numero">EXPERTISE</div>
            </div>

            <div class="bloc__image--2">
                <img src="../Accueil/public/img/img2.jpg" alt="image 1">
            </div>

            <div class="titre__image--2">
                <div class="numero">02<br/></div>
                <div class="titre__numero">FINITION SOIGNEES</div>
            </div>

            <div class="bloc__image--3">
                <img src="../Accueil/public/img/img3.jpg" alt="image 1">
            </div>

            <div class="titre__image--3">
                <div class="numero">03<br/></div>
                <div class="titre__numero">TARIFS CONCURRENTIELS</div>
            </div>
        </div>


        <div class="contact" id="contact">
            <div class="footer__mask">
                <svg width="100%" height="100%" viewBox="0 0 100 100 " preserveAspectRatio="none">
                    <path d="M0 100 L 0 0 C 25 100 75 100 100 0 L 100 100" fill="#FF7235"></path>
                </svg>
            </div>
            <h3 class="titre__contact"><br/><br/>Contactez-nous</h3>
            <p class="text__contact"><br/><br/>
                <i class="fas fa-phone"></i> 06.51.32.43.74 <br/>
                <i class="fas fa-envelope-open-text"></i> j2m.menuiserie56@gmail.com <br/>
                <i class="fab fa-instagram"></i>
                <a href="https://www.facebook.com/J2M-Menuiserie-56-101277742041139"><i class="fab fa-facebook"></a></i> 
                <a href="https://www.google.fr/maps/@47.8077712,-3.2891933,3a,75y,316.82h,67.29t/data=!3m9!1e1!3m7!1s2T5N-QgsIwZE68iYtYKnvg!2e0!7i16384!8i8192!9m2!1b1!2i48"><i class="fas fa-map-marked-alt"></i></a>
            </p>
        </div>

        <div class="footer" id="footer_color">

            <div class="box__footer1">A PROPOS</div>
            <div class="box__footer2">SOCIETE HENNEBONTAISE DE MENUISERIE</div>

            <div class="liste">   
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="mention.html">Mention Légale</a></li>
                    <li><a href="https://www.gandi.net/fr">Hebergeur</a></li>
                </ul>
            </div>   
            
            <div class="admin"><a href="../Login/login.php"><i class="fas fa-users-cog"></i></a></div>
        </div>
    </body>
</html>