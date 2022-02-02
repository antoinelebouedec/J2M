<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>J2M Menuiserie</title>
        <link rel="stylesheet" href="public/css/base.css">
        <link rel="stylesheet" href="public/css/header.css">
        <link rel="stylesheet" href="public/css/section.css">
        <link rel="stylesheet" href="aos-by-red.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="script.js" async></script>
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
        
        //Connexion à la BDD
        session_start();
        $bdd = new PDO ('mysql:host=localhost;dbname=j2m;charset=utf8;', 'root', '');

        if($_POST){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephone = $_POST['telephone'];
            $ville = $_POST['ville'];
            $adresse = $_POST['adresse'];
            $objet = $_POST['objet'];
            if(!empty($nom) AND !empty($prenom) AND !empty($telephone) AND !empty($ville) AND !empty($adresse) AND !empty($objet)){
                mysql_query('INSERT INTO devis (nom, prenom, telephone, ville, adresse, objet) VALUES ("'.$nom.'", "'.$prenom.'", "'.$telephone.'", "'.$ville.'", "'.$adresse.'", "'.$objet.'")') or die ('Erreur :' .mysql_error());
                echo "OK!";
            }
            else echo "Erreur un ou plusieurs champs est vide.";
        }
        
        ?>
        <div id="d1" class="devis">
            <br/>
            <h2>Demande de devis</h2>
            <form action="" class="formulaire__devis">
                <br/><br/>
                <label class="label" for="nom">Nom : </label>
                <input class="ecrire" type="text" id="nom">
                <br/><br/>
                <label class="label" for="prenom">Prénom : </label>
                <input class="ecrire" type="text" id="prenom">
                <br/><br/>
                <label class="label" for="telephone">Téléphone : </label>
                <input class="ecrire" type="text" id="telephone">
                <br/><br/>
                <label class="label" for="ville">Ville : </label>
                <input class="ecrire" type="text" id="ville">
                <br/><br/>
                <label class="label" for="adresse">Adresse : </label>
                <input class="ecrire" type="text" id="adresse">
                <br/><br/>
                <label class="label" for="objet">Objet : </label>
                <input class="ecrire" type="text" id="objet">
                <br/><br/>
                <input type="submit" value="Envoyer">
            </form>
            <br/><br/><br/>
            <i onclick="document.getElementById('d1').style.display='none'" class="fas fa-times"></i>
        </div>

        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
        </script>
        

        <div class="box__menu1">
            <div class="box1"><a href="interieure.html"><img class="imag" id="image__box1" src="../Accueil/public/img/interieure.jpg"></a></div>
            <div class="box2"><a href="exterieure.html"><img class="imag" id="image__box2" src="../Accueil/public/img/exterieure.jpg"></a></div>
        </div>

        <div class="box__menu2">
            <div class="box3"><a href="sol.html"><img class="imag" id="image__box3" src="../Accueil/public/img/escalier.jpg"></a></div>
            <div class="box4"><a href="cloison.html"><img class="imag" id="image__box4" src="../Accueil/public/img/cloison.jpg"></a></div>
        </div>

        <div class="box__menu3">
            <div class="box5"><a href="sol.html"><img class="imag" id="image__box5" src="../Accueil/public/img/escalier.jpg"></a></div>
            <div class="box6"><a href="cloison.html"><img class="imag" id="image__box6" src="../Accueil/public/img/cloison.jpg"></a></div>
        </div>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            duration: 3000,
            once: true,
        });
        </script>


        
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

        <script src="https://kit.fontawesome.com/a419204dea.js" crossorigin="anonymous"></script>



        <div class="choisir">
            <div class="titre__choix"><h2></br>BONNES RAISONS DE NOUS CHOISIR</h2></div>

            <div class="bloc1" data-aos="fade-bottom"><img class="imag" id="image__choix1" src="../Accueil/public/img/img1.jpg"></div>

            <div class="bloc2" id="raison1">
                </br>
                <h3 class="numero">02</h3>
                <p><strong>FINITION SOIGNEES</strong></p>
            </div>

            <div class="bloc3" data-aos="fade-bottom"><img class="imag" id="image__choix2" src="../Accueil/public/img/img3.jpg"></div>

            <div class="bloc4" id="raison2">
                </br>
                <h3 class="numero">01</h3>
                <p><strong>EXPERTISE</strong></p>
            </div>

            <div class="bloc5" data-aos="fade-bottom"><img class="imag" id="image__choix3" src="../Accueil/public/img/img2.jpg"></div>

            <div class="bloc6" id="raison3">
                </br>
                <h3 class="numero">03</h3>
                <p><strong>TARIFS CONCURRENTIELS</strong></p>
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


 
        <div class="footer">

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