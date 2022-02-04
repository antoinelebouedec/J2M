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