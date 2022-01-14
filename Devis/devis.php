<?php

$bdd=new PDO('mysql:host=localhost;dbname=j2m;charset=utf8', 'root', '');

?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>J2M Menuiserie</title>
        <link rel="stylesheet" href="../Accueil/public/css/base.css">
        <link rel="stylesheet" href="../Accueil/public/css/header.css">
        <link rel="stylesheet" href="aos-by-red.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
                        <h1 class="header__navbar--logo-title">J2M</h1>
                    </div>
                    <div class="header__navbar--menu">
                        <a href="" class="header__navbar--menu-link">Accueil</a>
                        <a href="" class="header__navbar--menu-link">Interieure</a>
                        <a href="" class="header__navbar--menu-link">Exterieure</a>
                        <a href="" class="header__navbar--menu-link">Sol et escalier</a>
                        <a href="" class="header__navbar--menu-link">Cloison seche</a>
                    </div>
                    <div class="header__navbar-toggle">
                        <span class="header__navbar-toggle-icons"></span>
                    </div>
                </div>
            </div>
        </div> 

        <div class="demande__devis">
            <h2 class="titre__devis">Demande de devis</h2>

            <input type="login" class="form-control" placeholder="Nom" required="required" autocomplete="off"><br/>
            <input type="login" class="form-control" placeholder="Prénom" required="required" autocomplete="off"><br/>
            <input type="login" class="form-control" placeholder="Téléphone" required="required" autocomplete="off"><br/>
            <input type="login" class="form-control" placeholder="Adresse" required="required" autocomplete="off"><br/>
            <input type="login" class="form-control" placeholder="Ville" required="required" autocomplete="off"><br/>
            <input type="text" class="form-control-objet" placeholder="Objet" required="required" autocomplete="off"><br/>

            <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
        </div>

        <style>
            .demande__devis{
                position: absolute;
                left: 50%;
                transform: translate(-50%);
                top: 30%;
                width: 30%;
                height: 50%;
                z-index: 3000;
                text-align: left;
                background-color: white;
                border-radius: 5px;
                background-color: #F5F5F5;
            }

            .titre__devis{
                text-align: center;
            }

            .form-control{
                margin-top: 10px;
                border-color: #FE3B05;
                border-radius: 3px;
                height: 40px;
                width: 50%;
                margin-left: 15%;
            }

            .form-control-objet{
                margin-top: 10px;
                border-color: #FE3B05;
                border-radius: 3px;
                height: 60px;
                width: 70%;
                margin-left: 15%;
            }

            .btn{
                margin-top: 20px;
                width: 200px;
                height: 50px;
                border: none;
                background-color: #FE3B05;
                border-radius: 5px;
                margin-left: 30%;
            }
        </style>



    </body>
</html>